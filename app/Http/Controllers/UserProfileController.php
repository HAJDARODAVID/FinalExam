<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{   

    public function index(){
        $data['user'] = User::where('id', Auth::user()->id)->first();
        return view('showProfile',$data);
    }

    public function changePassword(Request $request){

        $this->validate($request, [
            'oldPassword' => 'required',
            'password' => 'required|confirmed',
        ]);
        
        $user= User::where('id', Auth::user()->id)->first();
        if (Hash::check($request['oldPassword'], $user->password)) {
            $user->update(['password'=> Hash::make($request['password'])]);
            return redirect()->back()->with('success', 'Password successfully changed');
        }
    }
}
