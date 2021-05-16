<!-- loader start -->
<div class="loader_skeleton">
    <header class="header-2">
        <div class="top-header top-header-dark d-none d-sm-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Our {{env('APP_NAME','Laravel')}}</li>
                                <li><i class="fa fa-phone"
                                     aria-hidden="true"></i>Call Us: +90 536 771 1855</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <ul class="header-dropdown">
                           @auth
                            <li> <a href="{{ route('frontend.logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    logout
                                </a>
                            </li>
                            <form id="logout-form"
                                  action="{{ route('frontend.logout') }}"
                                  method="POST"
                                  class="d-none">
                                @csrf
                            </form>

                            @else
                            <li><a href="{{route('frontend.login')}}"
                                   data-lng="en">Login</a></li>
                            <li><a href="{{route('frontend.register')}}"
                                   data-lng="es">Register</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu border-section border-top-0">
                        <div class="menu-left">
                            <div class="navbar"><a href="javascript:void(0)"
                                   onclick="openNav()"><i class="fa fa-bars sidebar-bar"
                                       aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="brand-logo layout2-logo">
                           <a href="{{route('frontend.index')}}">
                            <h4>{{GeneralSiteSettings('site_title')}}</h4>
                            {{-- <img width="100" height="80"
                                             src="{{asset('uploads/settings/'.GeneralSiteSettings('site_logo'))}}"
                                             class="img-fluid blur-up lazyload"
                                             alt=""> --}}

                                            </a>
                        </div>
                        <div class="menu-right pull-right">
                            <div class="icon-nav d-none d-sm-block">
                                <ul>
                                    <li class="onhover-div mobile-search">
                                        <div><img src="../assets/images/icon/search.png"
                                                 onclick="openSearch()"
                                                 class="img-fluid blur-up lazyload"
                                                 alt=""> <i class="ti-search"
                                               onclick="openSearch()"></i></div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-nav-center">
                        <nav id="main-nav">
                            <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                            <!-- Sample menu definition -->
                            <ul class="sm pixelstrap sm-horizontal">
                                <li>
                                    <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                                           aria-hidden="true"></i></div>
                                </li>
                                <li>
                           <a href="{{route('frontend.index')}}">Home</a>
                                </li>

                                <li>
                              <a href="{{route('frontend.products')}}">product</a>
                                </li>
                                @auth
                                <li><a href="{{route('frontend.account.edit')}}">Account</a></li>
                                <li><a href="{{route('frontend.orders.index')}}">My Orders</a></li>
                                @endauth
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="home-slider">
        <div class="home"></div>
    </div>
    <section class="collection-banner banner-padding">
        <div class="container-fluid">
            <div class="row partition3">
                <div class="col-md-4">
                    <div class="ldr-bg">
                        <div class="contain-banner">
                            <div>
                                <h4></h4>
                                <h2></h2>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ldr-bg">
                        <div class="contain-banner">
                            <div>
                                <h4></h4>
                                <h2></h2>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ldr-bg">
                        <div class="contain-banner">
                            <div>
                                <h4></h4>
                                <h2></h2>
                                <h6></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container section-b-space">
        <div class="row section-t-space">
            <div class="col-lg-6 offset-lg-3">
                <div class="product-para">
                    <p class="first"></p>
                    <p class="second"></p>
                </div>
            </div>
            <div class="col-12">
                <div class="no-slider row">
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper"></div>
                        <div class="product-detail">
                            <h4></h4>
                            <h5></h5>
                            <h5 class="second"></h5>
                            <h6></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- loader end -->


<!-- header start -->
<header class="header-2">
    <div class="mobile-fix-option"></div>
    <div class="top-header top-header-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                         <li>Welcome to Our {{env('APP_NAME','Laravel')}}</li>
                            <li><i class="fa fa-phone"
                                   aria-hidden="true"></i>Call Us: +90 536 771 1855</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    <ul class="header-dropdown">
                         @auth
                        <li> <a href="{{ route('frontend.logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                logout
                            </a>
                        </li>
                        <form id="logout-form"
                              action="{{ route('frontend.logout') }}"
                              method="POST"
                              class="d-none">
                            @csrf
                        </form>

                        @else
                        <li><a href="{{route('frontend.login')}}"
                               data-lng="en">Login</a></li>
                        <li><a href="{{route('frontend.register')}}"
                               data-lng="es">Register</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu border-section border-top-0">
                    <div class="menu-left">
                        <div class="navbar"><a href="javascript:void(0)"
                               onclick="openNav()"><i class="fa fa-bars sidebar-bar"
                                   aria-hidden="true"></i></a>
                            <div id="mySidenav"
                                 class="sidenav">
                                <a href="javascript:void(0)"
                                   class="sidebar-overlay"
                                   onclick="closeNav()"></a>
                                <nav>
                                    <a href="javascript:void(0)"
                                       onclick="closeNav()">
                                        <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2"
                                               aria-hidden="true"></i> Back</div>
                                    </a>
                                    <!-- Vertical Menu -->
                                    <ul id="sub-menu"
                                        class="sm pixelstrap sm-vertical">

                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="brand-logo layout2-logo">
                     <a href="{{route('frontend.index')}}">
                        <h4>{{GeneralSiteSettings('site_title')}}</h4>
                        {{-- <img width="100"
                             height="80"
                             src="{{asset('uploads/settings/'.GeneralSiteSettings('site_logo'))}}"
                             class="img-fluid blur-up lazyload"
                             alt=""> --}}
                            </a>
                    </div>
                    <div class="menu-right pull-right">
                        <div class="icon-nav">
                            <ul>
                                <li class="onhover-div mobile-search">
                                    <div><img src="../assets/images/icon/search.png"
                                             onclick="openSearch()"
                                             class="img-fluid blur-up lazyload"
                                             alt=""> <i class="ti-search"
                                           onclick="openSearch()"></i></div>
                                    <div id="search-overlay"
                                         class="search-overlay">
                                        <div><span class="closebtn"
                                                  onclick="closeSearch()"
                                                  title="Close Overlay">×</span>
                                            <div class="overlay-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <form>
                                                                <div class="form-group">
                                                                    <input type="text"
                                                                           class="form-control"
                                                                           id="exampleInputPassword1"
                                                                           placeholder="Search a Product">
                                                                </div>
                                                                <button type="submit"
                                                                        class="btn btn-primary"><i
                                                                       class="fa fa-search"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="onhover-div mobile-setting">
                                    <div><img src="../assets/images/icon/setting.png"
                                             class="img-fluid blur-up lazyload"
                                             alt=""> <i class="ti-settings"></i>
                                    </div>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-nav-center">
                    <nav id="main-nav">
                        <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                        <!-- Sample menu definition -->
                        <ul id="main-menu"
                            class="sm pixelstrap sm-horizontal">
                            <li>
                                <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                                       aria-hidden="true"></i></div>
                            </li>
                          <li>
                                <a href="{{route('frontend.index')}}">Home</a>
                            </li>

                            <li>
                                <a href="{{route('frontend.products')}}">product</a>
                            </li>
                                   @auth
                                    <li><a href="{{route('frontend.account.edit')}}">Account</a></li>
                                    <li><a href="{{route('frontend.orders.index')}}">My Orders</a></li>
                                    @endauth
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
