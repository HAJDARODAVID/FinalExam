<?php

namespace App\View\Components;

use App\Models\admModuleItemsModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class admItemsTable extends Component
{   
    public $items;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = admModuleItemsModel::orderBy('order', 'asc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.adm-items-table');
    }
}
