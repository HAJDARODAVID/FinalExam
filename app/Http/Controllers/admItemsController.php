<?php

namespace App\Http\Controllers;

use App\Models\admModuleItemsModel;
use Illuminate\Http\Request;

class admItemsController extends Controller
{
    public function index(){
        return view('admItemsModule');
    }
    
    public function changeStatus( $id, $type){

        $items = admModuleItemsModel::where('id', $id)->first();
        $min= admModuleItemsModel::min('order');
        $max= admModuleItemsModel::max('order');
        
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
            $itemDown = admModuleItemsModel::where('order', $items->order-1)->first();
            $items->update(['order' => $items->order - 1]);
            $itemDown->update(['order' => $itemDown->order + 1]);
            
            return redirect()->back()->with('success', 'Menu item: '.$items->name. ' successfully moved up');
        } 
        if ($type == 'down') {
            if($items->order ==$max){
                return redirect()->back();
            }
            $itemDown = admModuleItemsModel::where('order', $items->order+1)->first();
            $items->update(['order' => $items->order + 1]);
            $itemDown->update(['order' => $itemDown->order - 1]);
            
            return redirect()->back()->with('success', 'Menu item: '.$items->name. ' successfully moved up');
        } 
    }

    public function edit(Request $request, $id){
        $items = admModuleItemsModel::where('id', $id)->first();
        $oldName = $items->name;
        $items->update($request->except(['_token', '_method' ]));
        return redirect()->back()->with('success', 'Menu item: '. $oldName . ' successfully changed to: '. $items->name);

    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'route' => 'required',
        ]);
        $request['order'] = admModuleItemsModel::max('order')+1;
        $request['active'] = 1;

        admModuleItemsModel::create($request->all());
        return redirect()->back()->with('success','New item created successfully.');

    }

    public function delete($id){

        $item = admModuleItemsModel::where('id', $id)->first();
        $item->delete();
        return redirect()->back()->with('success','Item #' . $item->id . ' successfully.');

    }

}
