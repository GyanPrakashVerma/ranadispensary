<!-- Side-Nav-->
<style>
    .fixed .main-header-top,
    .fixed .main-sidebar,
    .fixed .left-side {
        position: absolute;
    }

    .main-sidebar .sidebar ul li a:hover {
        background-color: #2196f3;
        color: #fff;
    }
    .main-sidebar .sidebar{
        min-height:fit-content!important;
    }
    aside{
        height: 0px!important;
    }
</style>
<aside class="main-sidebar hidden-print" >
    <section class="sidebar" id="sidebar-scroll">
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            <li class="active ">
                <a class="waves-effect waves-dark" href="{{ route('dash') }}">
                    <i class="icon-speedometer"></i><span> Dashboard</span>
                </a>
            </li>
            <li {{ Request::is('admin/ourteam') ? 'active' : '' }}><a class="waves-effect waves-dark" href="#"><i
                        class="fa-solid fa-camera"></i><span>
                        Hero section</span><i class="icon-arrow-down"></i></a>
                <ul class="treeview-menu">
                    <li {{ Request::is('admin/ourteam') ? 'active' : '' }}><a class="waves-effect waves-dark"
                            href="{{ route('slider.index') }}"> <i class="icon-arrow-right"></i>Slider section</a></li>

                    <li {{ Request::is('admin/banner/1/edit') ? 'active' : '' }}><a class="waves-effect waves-dark"
                            href="{{'/admin/banner/1/edit'}}"><i class="icon-arrow-right"></i> Banner</a></li>

                </ul>
            </li>
            <li {{ Request::is('admin/ourteam') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ route('ourteam.index') }}"><i class="fa-solid fa-people-group"></i><span>
                        Our Team</span></a></li>
                        <li {{ Request::is('/admin/about/1/edit') ? 'active' : '' }}><a class="waves-effect waves-dark"
                            href="{{ '/admin/about/1/edit'}}"><i class="fa-solid fa-people-group"></i><span>
                                About Us</span></a></li>
            <li {{ Request::is('admin/enquiries') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ route('enquiries.index') }}"><i class="fa-solid fa-calendar-check"></i><span>
                        Contacts</span></a></li>
            <li {{ Request::is('admin/subscribe') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ route('subscribe.index') }}"><i class="fa-solid fa-user-check"></i><span>
                        Subscribe</span></a></li>
            <li {{ Request::is('/admin/feedback') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ route('feedback.index') }}"><i class="fa-solid fa-message"></i><span>
                        Feedbacks</span></a></li>
            <li {{ Request::is('admin/service') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ route('service.index') }}"><i class="fa-brands fa-servicestack"></i><span>
                        Services</span></a></li>
            {{-- <li  {{Request::is('admin/ourteam')? 'active' : "";}}><a class="waves-effect waves-dark" href="{{ route('blog.list') }}"><i
                        class="fa-solid fa-blog"></i><span>
                        Blog</span></a></li> --}}
            <li {{ Request::is('admin/gallery') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ route('gallery.index') }}"><i class="fa-solid fa-camera"></i><span>
                        Gallery</span></a></li>
            <li {{ Request::is('admin/consulting/list') ? 'active' : '' }}><a class="waves-effect waves-dark" href="{{route('cnst_list')}}"><i class="fa-solid fa-stethoscope"></i><span>
                        Consultant</span></a></li>
            <li {{ Request::is('admin/setting/1/edit') ? 'active' : '' }}><a class="waves-effect waves-dark"
                    href="{{ '/admin/setting/1/edit' }}"><i class="fa-solid fa-screwdriver-wrench"></i><span>
                        Settings </span> </a>
            </li>
            <li {{ Request::is('admin/faq/') ? 'active' : '' }}><a class="waves-effect waves-dark"
                href="{{ route('faq.index') }}"><i class="fa-solid fa-book"></i><span>
                    FAQ </span> </a>
        </li>

        </ul>
    </section>
</aside>
