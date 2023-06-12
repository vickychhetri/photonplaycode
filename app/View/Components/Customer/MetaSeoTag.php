<?php

namespace App\View\Components\Customer;

use Illuminate\View\Component;

class MetaSeoTag extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $seodata;
    public function __construct($seodata)
    {
         $this->seodata=$seodata;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.customer.meta-seo-tag');
    }
}
