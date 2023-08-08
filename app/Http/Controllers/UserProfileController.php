<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index(){
        $data['user'] = User::where('id', Auth::user()->id)->first();
        return view('showProfile',$data);
    }
}
