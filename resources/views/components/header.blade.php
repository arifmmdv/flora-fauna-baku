@php
    $languages = [
        "az" => __('azerbaijani'),
        "en" => __('english'),
        "ru" => __('russian'),
    ]
@endphp
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
                            @foreach(\App\Models\Menu::find(1)->items as $menu)
                            <li>
                                <a href="/{{app()->getLocale()}}{{$menu->slug}}" @if(request()->path() == app()->getLocale().$menu->slug) class="active" @endif>
                                    <span class="menu-text">
                                        {{$menu->title}}
                                    </span>
                                </a>
                            </li>
                            @endforeach
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
                            <li class="languages-switcher d-none d-lg-flex">
                                <a href="#" class="off-canvas-menu-btn">
                                    {{app()->getLocale()}}
                                </a>
                                <ul>
                                    @foreach($languages as $locale => $language)
                                        @if($locale !== app()->getLocale())
                                            @php
                                                $pathParts = explode("/", request()->path());
                                                $pathParts[0] = $locale;
                                                $newPath = implode("/", $pathParts);
                                            @endphp
                                            <li>
                                                <a href="/{{ $newPath }}">{{ $locale }}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
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
                            @foreach(\App\Models\Menu::find(1)->items as $menu)
                            <li><a href="/{{app()->getLocale()}}{{$menu->slug}}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </nav>
                    <!-- mobile menu navigation end -->
                </div>
                <!-- mobile menu end -->
                <div class="offcanvas-widget-area">
                    <div class="switcher">
                        <div class="language">
                            <span class="switcher-title">{{ __('language') }}: </span>
                            <div class="switcher-menu">
                                <ul>
                                    <li><a href="#">{{ $languages[app()->getLocale()] }}</a>
                                        <ul class="switcher-dropdown">
                                            @foreach($languages as $locale => $language)
                                                @if($locale !== app()->getLocale())
                                                    @php
                                                        $pathParts = explode("/", request()->path());
                                                        $pathParts[0] = $locale;
                                                        $newPath = implode("/", $pathParts);
                                                    @endphp
                                                <li>
                                                    <a href="/{{ $newPath }}">{{ $language }}</a>
                                                </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top-info-wrap text-left text-black">
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
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- off-canvas menu end -->
</header>
<!-- Header Area End Here -->
