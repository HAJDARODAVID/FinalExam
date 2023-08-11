<?php

namespace App\Http\Controllers;

use App\Models\MainMenuModel;
use App\Models\RolesModel;
use App\Models\User;
use App\Models\UserRolesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
        $this->middleware('auth');   
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        return view('home');
    }

    public function test()
    {   
        $menuItems= MainMenuModel::all();

        //dd($menuItems->roles);

        foreach($menuItems as $items){
            foreach ($items->roles as $role) {
                echo $items->name . '-' . $role->sort_text . '<BR>';
            }
            
        }

    }
}


