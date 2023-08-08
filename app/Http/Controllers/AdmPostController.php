<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;

class AdmPostController extends Controller
{
    public function index(){
        return view('admPostsModule');
    }

    public function delete($id){
        $post = PostModel::where('id', $id)->first();
        $post->delete();
        return redirect()->back()->with('success','Post #'.$post->id.' deleted successfully.');
    }
}
