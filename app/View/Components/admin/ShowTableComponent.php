<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class ShowTableComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $dataList;


    public function __construct($dataList)
    {

        $this->dataList = $dataList;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.admin.show-table-component');
    }
}
