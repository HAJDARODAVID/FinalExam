<?php

namespace App\View\Components;

use App\Models\RolesModel;
use App\Models\UserRolesModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class editUserRoles extends Component
{   
    public $user;
    public $roleItems;
    public $userRoles;
    /**
     * Create a new component instance.
     */
    public function __construct($user=1)
    {
        $this->user = $user;
        $this->roleItems=RolesModel::all();
        $this->userRoles=UserRolesModel::where('user_id', $user)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.edit-user-roles');
    }
}
