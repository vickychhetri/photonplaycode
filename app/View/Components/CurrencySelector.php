<?php

namespace App\View\Components;

use App\Models\Currency;
use Illuminate\View\Component;

class CurrencySelector extends Component
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
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $currencies =Currency::all();
        return view('components.currency-selector',compact('currencies'));
    }
}
