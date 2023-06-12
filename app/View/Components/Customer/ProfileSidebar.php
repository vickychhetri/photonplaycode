<?php

namespace App\View\Components\customer;

use Illuminate\Support\Facades\Session;
use Illuminate\View\Component;

class ProfileSidebar extends Component
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
        $username = Session::get('user')->name;
        return view('components.customer.profile-sidebar', compact('username'));
    }
}
