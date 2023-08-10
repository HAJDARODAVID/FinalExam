<?php

namespace App\Http\Controllers;

use App\Models\RolesModel;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index(){
        return view('rolesModule');
    }

    public function edit(Request $request, $id){
        $request->validate([
            'sort_text' => 'required',
            'long_text' => 'required',
        ]);
        $items = RolesModel::where('id', $id)->first();
        $items->update($request->except(['_token', '_method' ]));
        return redirect()->back()->with('success', 'Role item: #'. $items->id . ' successfully changed');

    }

    public function delete($id){

        $item = RolesModel::where('id', $id)->first();
        $item->delete();
        return redirect()->back()->with('success','Role #' . $item->id . ' successfully.');

    }

    public function store(Request $request){

        $request->validate([
            'sort_text' => 'required',
            'long_text' => 'required'
        ]);

        RolesModel::create($request->all());
        return redirect()->back()->with('success','New item created successfully.');

    }
}
