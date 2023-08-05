<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    public function destroy($id){
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->route('userAdminModule');
    }

    public function edit($id){
        $user = User::where('id', $id)->first();
        $data['user'] = $user;
        return view('userEditModule', $data);
        
    }
    

    public function put(Request $request, $id){
        $user = User::where('id', $id)->first();
        if (isset($request['passReset'])){
            $user->update(['password' => Hash::make('123456')]);
            return redirect()->back()->with('success', 'Password reset successfully');
        }
        if ($request['role']=='on'){
            $request['role'] = 1;
        }else{
            $request['role'] = 0;
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        
        $user->update($request->all());
        return redirect()->route('userAdminModule');
    }
}
