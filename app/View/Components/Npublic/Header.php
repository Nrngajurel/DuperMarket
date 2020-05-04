<?php

namespace App\View\Components\Npublic;

use App\Category;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $categories= Category::where('parent_id',null)->with('child_categories')->get();
        return view('components.npublic.header',compact('categories'));
    }
}
