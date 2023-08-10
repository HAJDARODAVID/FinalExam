<?php

namespace App\Http\Controllers;

use App\Models\MainMenuModel;
use Illuminate\Http\Request;

class MainMenuItemsController extends Controller
{
    public function index(){
        return view('mainMenuItemsModule');
    }

    public function changeStatus( $id, $type){

        $items = MainMenuModel::where('id', $id)->first();
        $min= MainMenuModel::min('order');
        $max= MainMenuModel::max('order');
        
        if ($type == 'deactivate') {
            $items->update(['active' => 0]);
            return redirect()->back()->with('success', 'Menu item: '. $items->name . ' successfully deactivated');
        }
        if ($type == 'activate') {
            $items->update(['active' => 1]);
            return redirect()->back()->with('success', 'Menu item: '.$items->name. ' successfully activated');
        } 
        if ($type == 'up') {
            if($items->order ==$min){
                return redirect()->back();
            }
            $itemDown = MainMenuModel::where('order', $items->order-1)->first();
            $items->update(['order' => $items->order - 1]);
            $itemDown->update(['order' => $itemDown->order + 1]);
            
            return redirect()->back()->with('success', 'Menu item: '.$items->name. ' successfully moved up');
        } 
        if ($type == 'down') {
            if($items->order ==$max){
                return redirect()->back();
            }
            $itemDown = MainMenuModel::where('order', $items->order+1)->first();
            $items->update(['order' => $items->order + 1]);
            $itemDown->update(['order' => $itemDown->order - 1]);
            
            return redirect()->back()->with('success', 'Menu item: '.$items->name. ' successfully moved up');
        } 
    }

    public function delete($id){

        $item = MainMenuModel::where('id', $id)->first();
        $item->delete();
        return redirect()->back()->with('success','Item #' . $item->id . ' successfully.');

    }

    public function edit(Request $request, $id){
        $items = MainMenuModel::where('id', $id)->first();
        $oldName = $items->name;
        $items->update($request->except(['_token', '_method' ]));
        return redirect()->back()->with('success', 'Menu item: '. $oldName . ' successfully changed to: '. $items->name);

    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'route' => 'required',
        ]);
        $request['order'] = MainMenuModel::max('order')+1;
        $request['active'] = 1;
        $request['role_id'] = 1;

        MainMenuModel::create($request->all());
        return redirect()->back()->with('success','New item created successfully.');

    }
}
