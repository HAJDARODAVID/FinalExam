<?php

namespace App\View\Components;

use Closure;
use App\Models\User;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class userTable extends Component
{
    
    public $users;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->users = User::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user-table');
    }
}
