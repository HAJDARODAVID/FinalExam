<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use App\Models\admModuleItemsModel;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

class adminModuleMenuItems extends Component
{

    public $items;
    public $route;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = admModuleItemsModel::all();
        $this->route = Route::current()->getName();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin-module-menu-items');
    }
}
