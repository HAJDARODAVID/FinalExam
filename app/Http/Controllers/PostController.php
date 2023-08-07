<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(){
        return view('post');
    }

    public function store(Request $request){
        $request->validate([
            'post_title' => 'required',
            'post_body' => 'required',
        ]);
        $request['user_id'] = Auth::user()->id;
        PostModel::create($request->all());
        return redirect()->route('welcome')->with('success','New post created successfully.');
    }

    public function show($id){
        $data['post']= PostModel::where('id', $id)->first();
        return view('showPost',$data);
    }

    public function edit($id){
        $data['post']= PostModel::where('id', $id)->first();
        if ($data['post']->user_id == Auth::user()->id) {
            return view('editPost',$data);
        }
        return redirect()->back();        
    }
    
    public function put(Request $request,  $id){
        $post = PostModel::where('id', $id)->first();
        if ($post->user_id == Auth::user()->id) {
            $post->update($request->all());
            return redirect()->route('welcome')->with('success','Post #'.$post->id.' changed successfully.');
        }
        return redirect()->back();  
    }

    public function delete($id){
        $post = PostModel::where('id', $id)->first();
        if ($post->user_id == Auth::user()->id) {
            $post->delete();
            return redirect()->route('welcome')->with('success','Post #'.$post->id.' deleted successfully.');
        }
        return redirect()->back();
    } 
}
