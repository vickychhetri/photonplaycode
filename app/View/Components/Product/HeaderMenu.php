<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class HeaderMenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $page;
    public $pid;
    public function __construct($page,$pid)
    {
       $this->page=$page;
        $this->pid= $pid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product.header-menu');
    }
}
