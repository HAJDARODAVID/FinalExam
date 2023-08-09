<?php

namespace App\Http\Controllers;

use App\Models\MainMenuModel;
use App\Models\RolesModel;
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
        $items = MainMenuModel::find(1);
        $roles = UserRolesModel::where('user_id', Auth::user()->id)->get();
        $roles->where('role_id', '2');
        dd($roles);
    }
}


