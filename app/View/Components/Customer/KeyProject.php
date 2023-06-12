<?php

namespace App\View\Components\Customer;

use App\Models\Banner;
use Illuminate\View\Component;

class KeyProject extends Component
{
    public  $banners;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->banners=Banner::where('type',2)->orderBy('order')->take(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.customer.key-project');
    }
}
