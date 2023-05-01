<div class="wrapper">
    <div id="loader"></div>
<header class="main-header">
        <div class="d-flex align-items-center logo-box justify-content-start">
            <a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
                <i data-feather="menu"></i>
            </a>
            <!-- Logo -->
            <a href="/" class="logo">
                <!-- logo-->
                <div class="logo-lg">
                    <span>Essay Sages</span>
                    <!-- <span class="light-logo"><img src="{{asset('/admin/images/logo-dark-text.png')}}" alt="logo"></span> -->
                    <!-- <span class="dark-logo"><img src="{{asset('/admin/images/logo-light-text.png')}}" alt="logo"></span> -->
                </div>
            </a>
        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item d-md-none">
                        <a href="#" class="waves-effect waves-light nav-link push-btn" data-toggle="push-menu" role="button">
                            <i data-feather="menu"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <li class="btn-group nav-item d-lg-flex d-none align-items-center">
                        <p class="mb-0 text-fade pr-10 pt-5">Friday, 4th December 2020</p>
                    </li>
                    <li class="btn-group nav-item d-lg-inline-flex d-none">
                        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen" title="Full Screen">
                            <i data-feather="maximize"></i>
                        </a>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="Notifications">
                            <i data-feather="bell"></i>
                        </a>
                        <ul class="dropdown-menu animated bounceIn">

                            <li class="header">
                                <div class="p-20">
                                    <div class="flexbox">
                                        <div>
                                            <h4 class="mb-0 mt-0">Notifications</h4>
                                        </div>
                                        <div>
                                            <a href="#" class="text-danger">Clear All</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu sm-scrol">
                                    @foreach(auth()->user()->notifications as $notification)
                                        @if($notification->data['message']['notifiying_id'] == auth()->user()->id)
                                            <a href="#">
                                                <i class="fa fa-users text-info"></i>{{ $notification->data['message']['message'] }}
                                            </a>
                                        @endif
                                    @endforeach
                                    
                                </ul>
                            </li>
                            <!-- <li class="footer">
                                <a href="#">View all</a>
                            </li> -->
                        </ul>
                    </li>
                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle" data-toggle="dropdown" title="User">
                            <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
                        </a>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="{{ route('signout') }}"><i class="ti-lock text-muted mr-2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>