<?php

namespace App\View\Components;

use App\Models\MainMenuModel;
use App\Models\UserRolesModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class mainMenuItems extends Component
{
    public $items;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = MainMenuModel::whereIn('role_id', $this->getElements())
                                ->where('active', 1)
                                ->orderBy('order', 'asc')
                                ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-menu-items');
    }

    private function getElements(){
        $user=Auth::user();
        $userRoles = UserRolesModel::where('user_id', $user->id)->get();
        $data=[];
        foreach ($userRoles as $role) {
            $data[]=$role->role_id;
        }
        return $data;
    }
}
