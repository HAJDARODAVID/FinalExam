<?php

namespace App\View\Components;

use Closure;
use App\Models\PostModel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class myPostsList extends Component
{
    public $posts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->posts = PostModel::where('user_id', Auth::user()->id)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-posts-list');
    }
}
