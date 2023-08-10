<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRolesModel;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use function PHPUnit\Framework\isNull;

class UserController extends Controller
{
    public function index(){
        return view('userModule');
    }
    
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
        if ($request['is_admin']=='on'){
            $request['is_admin'] = 1;
        }else{
            $request['is_admin'] = 0;
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        
        $user->update($request->all());
        return redirect()->route('userAdminModule');
    }

    public function showModel($id){
        return redirect()->route('userAdminModule')->with('show_modal',$id);
    }

    public function editRoles(Request $request, $id){

        $userRoles = UserRolesModel::where('user_id', $id);
        $userRoles->delete();

        foreach ($request->all() as $key => $request) {
            if (substr($key, 0,8) == "role_id_") {
                UserRolesModel::create([
                    'user_id' => $id,
                    'role_id' => ltrim($key, 'role_id_')
                ]);
                echo $key ." - ". ltrim($key, 'role_id_') .'<br>';
            }
        }
        return redirect()->back()->with('success', 'Roles successfully changed');

    }
}
