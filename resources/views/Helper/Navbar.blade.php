<!-- header-section (digital-header) - start
================================================== -->
<header id="header-section" class="header-section clearfix">
    <div id="digital-header" class="digital-header clearfix">

        <div class="header-top bg-green clearfix">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5">
                        <div class="header-top-left ul-li">
                            <ul class="clearfix">

                                <li>Default welcome msg!</li>
                                <li><a href="#!"><i class="flaticon-e-mail-envelope"></i> Company@domain.com</a></li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="header-top-right ul-li-right">
                            <ul class="clearfix">
                                @auth
                                <li>
                                    <a  href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout <i class="fas fa-sign-out-alt"></i> </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                    @else
                                    <li>
                                        <a href="{{route('login')}}"><i class="fas fa-lock"></i> Login</a>
                                    </li>
                                    <li>
                                        <a href="{{route('register')}}"><i class="fas fa-user-plus"></i> Register</a>
                                    </li>
                                @endauth


                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="header-middle clearfix">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3">
                        <div class="brand-logo-container">
                            <a href="{{route('home')}}" class="brand-logo">
                                <img src="{{asset('images/logo.png')}}" alt="logo_not_found">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="main-search-container">

                            <div class="search-form">
                                <form action="#!">

                                    <input type="text" autocomplete="off" id="search"  placeholder="Enter product Name">
                                    <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>

                                    {{--<select class="categories-select">--}}
                                        {{--<option>All Categories</option>--}}
                                        {{--@foreach($navigationCategory as $category)--}}
                                            {{--<optgroup label="- {{$category->name}}">--}}
                                                {{--@if($category->subcategoryName != null)--}}
                                                    {{--@foreach($category->subcategoryName as $subCategory)--}}
                                                       {{--<option>{{$subCategory->name}}</option>--}}
                                                    {{--@endforeach--}}
                                                {{--@endif--}}
                                            {{--</optgroup>--}}
                                        {{--@endforeach--}}
                                    {{--</select>--}}

                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="three-btn-group clearfix">

                            <div class="currency-select">
                                {{--<select data-placeholder="Choose a currency...">--}}
                                    {{--<option value="USD" selected="">USD</option>--}}
                                    {{--<option value="EUR">EUR</option>--}}
                                    {{--<option value="GBP">GBP</option>--}}
                                {{--</select>--}}

                            </div>

                            <div class="wishlist-cart-btn ul-li-right clearfix">
                                <ul class="clearfix">
                                    {{--<li class="wishlist-btn">--}}
                                        {{--<a href="#!">--}}
                                            {{--<i class="flaticon-heart"></i>--}}
                                            {{--<span class="item-counter bg-green">0</span>--}}
                                        {{--</a>--}}
                                        {{--<div class="wishlist-items-container no-items">--}}
													{{--<span class="empty-text">--}}
														{{--<i class="flaticon-shopping-basket"></i> You have no items in your wishlist.--}}
													{{--</span>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}


                                    <li class="cart-btn">
                                        <a href="#!" id="savetoCartButton">
                                            <i class="flaticon-shopper"></i>
                                            <span class="item-counter bg-green" id="countCart"></span>
                                        </a>
                                        <div class="cart-items-container has-items" id="cartContent">


                                        </div>
                                    </li>

                                    @auth
                                    <li class="wishlist-btn">
                                        <a class="dropdown-toggle"  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <i class="flaticon-user"></i>
                                        </a>
                                        <div class="dropdown">
                                            <div class="dropdown-menu" >
                                                <a class="dropdown-item" href="{{route('user.dashboard')}}">My Account</a>
                                                {{--<a href="{{ route('password.request') }}" class="dropdown-item" >Change Password</a>--}}
                                                <a  class="dropdown-item"  href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Logout</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                        @endauth
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="header-bottom clearfix">
            <div class="container">
                <div class="main-menu">
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="all-departments-menu">
                                <button type="button" class="menu-btn bg-green">
                                    <i class="flaticon-bulleted-list"></i>
                                    all Categories
                                </button>
                                <ul class="departments-dropdown-menu">
                                    @foreach($navigationCategory as $category)
                                        <li class="menu-item-has-children has-mega-menu">
                                            <a href="#!">{{$category->name}}</a>
                                            <ul class="mega-menu clearfix"
                                                style="background-image: url(assets/images/mega-menu-bg-1.jpg);">
                                                <li>
                                                    <span class="title-text color-royal-blue mb-30">{{$category->name}}</span>
                                                    <ul class="mega-menu-item-list clearfix">
                                                        <li><a href="#!">Tops & Tees</a></li>
                                                        <li><a href="#!">Sweaters</a></li>
                                                        <li><a href="#!">Leggings</a></li>
                                                        <li><a href="#!">Lingerie, Sleep & Lounge</a></li>
                                                        <li><a href="#!">Dresses</a></li>
                                                        <li><a href="#!">Coats, Jackets & Vests</a></li>
                                                        <li><a href="#!">Active</a></li>
                                                        <li><a href="#!">Socks & Hosiery</a></li>
                                                        <li><a href="#!">Pants</a></li>
                                                        <li><a href="#!">Swimsuits & Cover Ups</a></li>
                                                        <li><a href="#!">Suiting & Blazers</a></li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <span class="title-text color-royal-blue mb-30">storm fashion</span>
                                                    <ul class="mega-menu-item-list clearfix">
                                                        <li><a href="#!">men's</a></li>
                                                        <li><a href="#!">women's</a></li>
                                                        <li><a href="#!">boys</a></li>
                                                        <li><a href="#!">girls</a></li>
                                                        <li><a href="#!">babys</a></li>
                                                        <li><a href="#!">laggage</a></li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <span class="title-text color-royal-blue mb-30">accessories</span>
                                                    <ul class="mega-menu-item-list clearfix">
                                                        <li><a href="#!">Accessories</a></li>
                                                        <li><a href="#!">Jewelry</a></li>
                                                        <li><a href="#!">Shoes</a></li>
                                                        <li><a href="#!">Handbags & Wallets</a></li>
                                                        <li><a href="#!">Watches</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    @endforeach
                                    <li><a href="#!">gadgets</a></li>

                                    {{--<li>--}}
                                    {{--<button type="button" class="add-new">--}}
                                    {{--<i class="fas fa-plus-square"></i>--}}
                                    {{--more categories--}}
                                    {{--</button>--}}
                                    {{--</li>--}}
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="main-menu-list ul-li-center">
                                <ul class="clearfix">

                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#!">Categories</a>
                                        <ul class="sub-menu clearfix">
                                            @foreach($navigationCategory as $category)
                                            <li><a href="{{route('productBy.catName',[$category->name])}}">{{$category->name}}</a></li>
                                                @endforeach
                                        </ul>
                                    </li>


                                    <li><a href="{{route('contact.form')}}">contact us</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="hotline-support">
										<span class="icon">
											<i class="flaticon-help"></i>
										</span>
                                <div class="hotline-content ul-li-block">
                                    <ul>
                                        <li><strong class="color-black">Support 24/7:</strong> (080) 175038163</li>
                                        <li><strong class="color-black">Email:</strong>info@dentobit.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- mobile-menu - start -->
<div class="mobile-menu">
    <div class="container">
        <div class="brand-logo float-left">
            <a href="#!" class="logo">
                <img src="{{asset('images/logo.png')}}" alt="logo_not_found">
            </a>
        </div>
        <button type="button" id="sidebarCollapse" class="menu-btn bg-royal-blue float-right">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</div>
<!-- mobile-menu - end -->

<div class="mobile-menu-wrapper">
    <div id="sidebar">
        <div id="dismiss"><i class="fas fa-arrow-left"></i></div>

        <div class="brand-logo">
            <a href="#!" class="logo">
                <img src="{{asset('images/logo.png')}}" alt="logo_not_found">
            </a>
        </div>
        <!-- btns-group - start -->
        <div class="btns-group ul-li-center mb-30">
            <ul class="clearfix">
                <li><a href="#!"><i class="flaticon-user"></i></a></li>
                <li>
                    <a href="#!">
                        <i class="flaticon-heart"></i>
                        <small class="item-counter bg-past">1</small>
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <i class="flaticon-shopper"></i>
                        <small class="item-counter bg-past">2</small>
                    </a>
                </li>
            </ul>
        </div>
        <!-- btns-group - end -->
        <!-- search-bar - start -->
        <div class="search-bar mb-60">
            <div class="form-item m-0">
                <input type="search" placeholder="search...">
                <button type="submit" class="form-item-btn">
                    <i class="flaticon-search"></i>
                </button>
            </div>
        </div>
        <!-- search-bar - end -->

        <!-- home-pages - start -->
        <div class="home-pages">
            <div class="sidebar-title mb-15">
                <h2>
                    all home pages
                </h2>
            </div>
            <ul class="list-unstyled components">
                <li class="menu-item-has-child active">
                    <a href="#bicycle-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon"><i class="fas fa-bicycle"></i></span>
                        bicycle
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="bicycle-submenu">
                        <li><a href="home-bicycle-1.html">bicycle v.1</a></li>
                        <li><a href="home-bicycle-2.html">bicycle v.2</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-child">
                    <a href="#digital-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon"><i class="fas fa-bolt"></i></span>
                        digital
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="digital-submenu">
                        <li><a href="home-digital-1.html">digital v.1</a></li>
                        <li><a href="home-digital-2.html">digital v.2</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-child">
                    <a href="#fashion-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon"><i class="fab fa-slideshare"></i></span>
                        fashion
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="fashion-submenu">
                        <li><a href="home-fashion-1.html">fashion v.1</a></li>
                        <li><a href="home-fashion-2.html">fashion v.2</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-child">
                    <a href="#food-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon"><i class="fab fa-gulp"></i></span>
                        food
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="food-submenu">
                        <li><a href="home-food-1.html">food v.1</a></li>
                        <li><a href="home-food-2.html">food v.2</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-child">
                    <a href="#furniture-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon">F</span>
                        furniture
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="furniture-submenu">
                        <li><a href="home-furniture-1.html">furniture v.1</a></li>
                        <li><a href="home-furniture-2.html">furniture v.2</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-child">
                    <a href="#jewelry-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon"><i class="far fa-gem"></i></span>
                        jewelry
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="jewelry-submenu">
                        <li><a href="home-jewellry-1.html">jewelry v.1</a></li>
                        <li><a href="home-jewellry-2.html">jewelry v.2</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-child">
                    <a href="#shoes-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon">S</span>
                        shoes
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="shoes-submenu">
                        <li><a href="home-shoes-1.html">shoes v.1</a></li>
                        <li><a href="home-shoes-2.html">shoes v.2</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-child">
                    <a href="#sunglass-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon">S</span>
                        sunglass
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="sunglass-submenu">
                        <li><a href="home-sunglass-1.html">sunglass v.1</a></li>
                        <li><a href="home-sunglass-2.html">sunglass v.2</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-child">
                    <a href="#tools-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon"><i class="fas fa-wrench"></i></span>
                        tools
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="tools-submenu">
                        <li><a href="home-tools-1.html">tools v.1</a></li>
                        <li><a href="home-tools-2.html">tools v.2</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-child">
                    <a href="#watches-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon"><i class="far fa-clock"></i></span>
                        watches
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="watches-submenu">
                        <li><a href="home-watches-1.html">watches v.1</a></li>
                        <li><a href="home-watches-2.html">watches v.2</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- home-pages - end -->

        <!-- home-pages - start -->
        <div class="home-pages">
            <div class="sidebar-title mb-15">
                <h2>
                    single pages here
                </h2>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="about.html">
                        <span class="icon"><i class="flaticon-user"></i></span>
                        about us
                    </a>
                </li>
                <li class="menu-item-has-child">
                    <a href="#blog-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon"><i class="far fa-square"></i></span>
                        our blog
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="blog-submenu">
                        <li><a href="blog.html">blog page</a></li>
                        <li><a href="blog-details.html">blog details</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-child">
                    <a href="#product-grid-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon"><i class="fas fa-th"></i></span>
                        product grid
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="product-grid-submenu">
                        <li><a href="product-grid-left-sidebar.html">left sidebar</a></li>
                        <li><a href="product-grid-right-sidebar.html">right sidebar</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-child">
                    <a href="#product-list-submenu" data-toggle="collapse" aria-expanded="false">
                        <span class="icon"><i class="fas fa-th-list"></i></span>
                        product list
                    </a>
                    <ul class="sub-menu collapse list-unstyled" id="product-list-submenu">
                        <li><a href="product-list-left-sidebar.html">left sidebar</a></li>
                        <li><a href="product-list-right-sidebar.html">right sidebar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product-details.html">
                        <span class="icon"><i class="fas fa-info"></i></span>
                        product details
                    </a>
                </li>
                <li>
                    <a href="shopping-cart.html">
                        <span class="icon"><i class="flaticon-cart"></i></span>
                        shopping cart
                    </a>
                </li>
                <li>
                    <a href="#!">
                        <span class="icon"><i class="flaticon-check-box"></i></span>
                        checkout
                    </a>
                </li>
                <li>
                    <a href="contact.html">
                        <span class="icon"><i class="flaticon-phone-call"></i></span>
                        contact us
                    </a>
                </li>
                <li>
                    <a href="404.html">
                        <span class="icon"><i class="fas fa-exclamation-triangle"></i></span>
                        404 error
                    </a>
                </li>
            </ul>
        </div>
        <!-- home-pages - end -->

        <!-- login-signup - start -->
        <div class="login-signup ul-li-center mb-30 clearfix">
            <ul class="clearfix">
                <li><a href="login-register.html">login</a></li>
                <li><a href="login-register.html">sign up</a></li>
            </ul>
        </div>
        <!-- login-signup - end -->

        <!-- footer-area - start -->
        <div class="footer-area ul-li-center text-center">
            <div class="mb-15">
                <ul class="social-links">
                    <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#!"><i class="fas fa-rss"></i></a></li>
                    <li><a href="#!"><i class="fab fa-pinterest"></i></a></li>
                    <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <p class="m-0">
                Copyright 2018 © Powered by <a href="#!"><strong class="color-past">Storm</strong></a>
            </p>
        </div>
        <!-- footer-area - end -->

    </div>

    <div class="overlay"></div>
</div>
<!-- header-section (digital-header) - end
================================================== -->