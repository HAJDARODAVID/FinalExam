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
    public $type;
    /**
     * Create a new component instance.
     */
    public function __construct($type)
    {
        $this->type = $type;
        $this->posts = $this->getData($type);
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-posts-list');
    }

    public function getData($type){
        if ($type=='user') {
            return PostModel::where('user_id', Auth::user()->id)->get();
        }

        if ($type=='adm') {
            return PostModel::orderBy('id', 'desc')->get();
        }
    }
}
