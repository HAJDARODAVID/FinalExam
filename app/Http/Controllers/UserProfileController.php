<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

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

    public function editUser(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        $user = User::where('id', $id)->first();
        $user->update($request->all());
        return redirect()->back()->with('success', 'Changes successfully saved');
    }

    public function uploadImage(Request $request){
        if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($request->file('avatar')->getRealPath())->resize(300,300)->save(public_path('/uploads/avatars/' . $fileName));
            $user = User::where('id', Auth::user()->id);
            $user->update(['avatar' => $fileName]);
            return redirect()->back()->with('success', 'New image successfully saved');
        }
        return redirect()->back();
    }
}
