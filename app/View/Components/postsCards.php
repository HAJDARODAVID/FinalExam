<?php

namespace App\View\Components;

use App\Models\PostModel;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class postsCards extends Component
{
    public $posts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->posts = PostModel::orderBy('id', 'desc')->paginate(8);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.posts-cards');
    }
}
