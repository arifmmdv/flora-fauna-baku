<!-- Header Area Start Here -->
<header class="main-header-area">
    <!-- Main Header Area Start -->
    <div class="main-header header-transparent header-sticky">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-2 col-xl-2 col-md-6 col-6 col-custom">
                    <div class="header-logo d-flex align-items-center">
                        <a href="/{{app()->getLocale()}}">
                            <img class="img-full" src="/assets/images/logo/logo.png" alt="Header Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 d-none d-lg-flex justify-content-center col-custom">
                    <nav class="main-nav d-none d-lg-flex">
                        <ul class="nav">
                            <li>
                                <a href="/{{app()->getLocale()}}">
                                    <span class="menu-text">Ana Səhifə</span>
                                </a>
                            </li>
                            <li>
                                <a href="/{{app()->getLocale()}}/haqqimizda">
                                    <span class="menu-text">Haqqımızda</span>
                                </a>
                            </li>
                            <li>
                                <a href="/{{app()->getLocale()}}/mehsullar">
                                    <span class="menu-text">Məhsullar</span>
                                </a>
                            </li>
                            <li>
                                <a href="/{{app()->getLocale()}}/elaqe">
                                    <span class="menu-text">Əlaqə</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2 col-md-6 col-6 col-custom">
                    <div class="header-right-area main-nav">
                        <ul class="nav">
{{--                            <li class="minicart-wrap">--}}
{{--                                <a href="#" class="minicart-btn toolbar-btn">--}}
{{--                                    <i class="fa fa-shopping-cart"></i>--}}
{{--                                    <span class="cart-item_count">3</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="sidemenu-wrap">--}}
{{--                                <a href="#"><i class="fa fa-search"></i> </a>--}}
{{--                            </li>--}}
{{--                            <li class="account-menu-wrap d-none d-lg-flex">--}}
{{--                                <a href="#" class="off-canvas-menu-btn">--}}
{{--                                    <i class="fa fa-bars"></i>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <li class="mobile-menu-btn d-lg-none">
                                <a class="off-canvas-btn" href="#">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header Area End -->
    <!-- off-canvas menu start -->
    <aside class="off-canvas-wrapper" id="mobileMenu">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-inner-content">
            <div class="btn-close-off-canvas">
                <i class="fa fa-times"></i>
            </div>
            <div class="off-canvas-inner">
                <!-- mobile menu start -->
                <div class="mobile-navigation">
                    <!-- mobile menu navigation start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li><a href="/{{app()->getLocale()}}">Ana Səhifə</a></li>
                            <li><a href="/{{app()->getLocale()}}/haqqimizda">Haqqımızda</a></li>
                            <li><a href="/{{app()->getLocale()}}/mehsullar">Məhsullar</a></li>
                            <li><a href="/{{app()->getLocale()}}/elaqe">Əlaqə</a></li>
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
{{--                <div class="offcanvas-widget-area">--}}
{{--                    <div class="switcher">--}}
{{--                        <div class="language">--}}
{{--                            <span class="switcher-title">Language: </span>--}}
{{--                            <div class="switcher-menu">--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">English</a>--}}
{{--                                        <ul class="switcher-dropdown">--}}
{{--                                            <li><a href="#">German</a></li>--}}
{{--                                            <li><a href="#">French</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="top-info-wrap text-left text-black">--}}
{{--                        <ul class="address-info">--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-phone"></i>--}}
{{--                                <a href="info@yourdomain.com">(1245) 2456 012</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <i class="fa fa-envelope"></i>--}}
{{--                                <a href="info@yourdomain.com">info@yourdomain.com</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                        <div class="widget-social">--}}
{{--                            <a class="facebook-color-bg" title="Facebook-f" href="#"><i class="fa fa-facebook-f"></i></a>--}}
{{--                            <a class="twitter-color-bg" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>--}}
{{--                            <a class="linkedin-color-bg" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>--}}
{{--                            <a class="youtube-color-bg" title="Youtube" href="#"><i class="fa fa-youtube"></i></a>--}}
{{--                            <a class="vimeo-color-bg" title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
</header>
<!-- Header Area End Here -->
