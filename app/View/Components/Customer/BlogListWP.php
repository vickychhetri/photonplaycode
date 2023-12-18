<?php

namespace App\View\Components\Customer;

use App\Models\TeamMember;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class BlogListWP extends Component
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
        $postsSlice = Http::get(env('WORDPRESS_BASE_URL') . 'wp-json/wp/v2/posts?_embed=1&orderby=date&order=desc')->json();

        $blogs = array_slice($postsSlice, 0 , 3);
        $team_members = TeamMember::take(4)->get();

        return view('components.customer.blog-list-w-p',compact('blogs','team_members'));
    }
}
