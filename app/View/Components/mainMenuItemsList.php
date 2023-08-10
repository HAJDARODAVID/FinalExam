<?php

namespace App\View\Components;

use Closure;
use App\Models\MainMenuModel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class mainMenuItemsList extends Component
{
    public $items;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = MainMenuModel::orderBy('order', 'asc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-menu-items-list');
    }
}
