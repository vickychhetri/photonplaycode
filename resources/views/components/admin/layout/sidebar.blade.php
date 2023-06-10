<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper" style="padding: 15px 30px;"><a href="{{route('admin.dashboard') }}"><img src="{{asset('assets\customer\images\logo-dark.webp')}}" style="height: 40px;"/></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper" style="padding: 15px 30px;"><a href="{{route('admin.dashboard') }}"> <h4> P</h4> </a></div>

        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{route('admin.dashboard') }}">
                            <img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt="">
                        </a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                                                              aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/dashboard','admin-dashboard') ? 'active':''}}" href="{{route('admin.dashboard') }}">
                            <i data-feather="home"> </i><span>Dashboard</span>
                        </a>
                    </li>
                    @if(Auth::user()->role_as == 'Admin')

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/manage-employees','edit-employee*','add-employee') ? 'active':''}}" href="{{ url('admin/manage-employees') }}">
                                <i data-feather="users"></i>
                                <span>Manage Users</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/category') ? 'active':''}}" href="{{ url('admin/category') }}">
                                <i data-feather="trello"> </i>
                                <span>Manage Categories</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/category') ? 'active':''}}" href="{{ url('admin/coupons') }}">
                                <i data-feather="trello"> </i>
                                <span>Manage Coupons</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/specilization') ? 'active':''}}" href="{{ url('admin/specilization') }}">
                                <i data-feather="trello"> </i>
                                <span>Manage Specifications</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/product') ? 'active':''}}" href="{{ route('admin.product.index') }}">
                                <i data-feather="shopping-bag"></i>
                                <span>Manage Products</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/orders') ? 'active':''}}" href="{{ route('admin.orders_index') }}">
                                <i data-feather="shopping-cart"></i>
                                <span>Manage Orders</span>
                            </a>
                        </li>


                        <li class="sidebar-list">

                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/cms-home','cms-home') ? 'active':''}}" href="{{route('admin.cmshomepage') }}">
                                <i data-feather="file-minus"></i>
                                <span>CMS</span>
                            </a>

                        </li>

                        <li class="sidebar-list">

                            <a href="#" class="sidebar-link sidebar-title link-nav" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                                <i data-feather="file-minus"></i>
                                <span> Content</span>
                            </a>

                            <div class="collapse" id="dashboard-collapse">
                                <ul class="btn-toggle-nav fw-normal pb-1">
                                    <li class="p-2"><a href="{{route('admin.show_page_content','about-us')}}" class="link-dark rounded " >1. About us</a></li>
                                    <li class="p-2"><a href="{{route('admin.show_page_content','term-conditions')}}" class="link-dark rounded">2. Terms & Conditions</a></li>
                                    <li class="p-2"><a href="{{route('admin.show_page_content','privacy-policy')}}" class="link-dark rounded">3. Privacy Policy</a></li>
                                    <li class="p-2"><a href="{{route('admin.show_page_content','shipping')}}" class="link-dark rounded">4. Shipping</a></li>
                                    <li class="p-2"><a href="{{route('admin.show_page_content','return-policy')}}" class="link-dark rounded">5. Refund/Return Policy</a></li>
                                </ul>
                            </div>

                        </li>

                        <li class="sidebar-list">

                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/contact-us') ? 'active':''}}" href="{{route('admin.contact_us_index') }}">
                                <i data-feather="mail"></i>
                                <span>Contact Us</span>
                            </a>

                        </li>

                        <li class="sidebar-list">

                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/notifications','notifications') ? 'active':''}}" href="{{route('admin.notifications_form') }}">
                                <i data-feather="mail"></i>
                                <span>Notifications</span>
                            </a>

                        </li>


                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/settings','settings') ? 'active':''}}" href="{{route('admin.setting-home-page') }}">
                                <i data-feather="settings"></i>
                                <span>Settings</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav {{Request::is('admin/db-backup','db-backup') ? 'active':''}}" href="{{route('admin.dbbackupform') }}">
                                <i data-feather="database"></i>
                                <span>DB Backup</span>
                            </a>
                        </li>

                    @endif


                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>

