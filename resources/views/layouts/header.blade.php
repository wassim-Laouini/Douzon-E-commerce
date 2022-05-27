








 <!--? Preloader Start -->
 <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.png"  alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky">
            <div class="container-fluid">
                <div class="menu-wrapper">
                    <!-- Logo -->
                    <div class="logo logoprence">
                        <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                    </div>
                    <!-- Main-menu -->
                    <div class="main-menu d-none d-lg-block">
                        <nav>                                                
                            <ul id="navigation">  
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('shop') }}">shop</a></li>
                                <li><a href="{{ route('about') }}">about</a></li>
                                <li class="hot"><a href="{{ route('lastest') }}">Latest</a>
                                    <ul class="submenu">
                                        <li><a href=""> Product list</a></li>
                                        <li><a href="product_details.html"> Product Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="{{route('blog') }}">Blog</a></li>
                                        <li><a href="{{route('blog-details') }}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="submenu">
                                        
                                        <li><a href="{{ route('Quantityprod') }}">Cart</a></li>
                                        
                                        <li><a href="{{ route('confermation') }}">Confirmation</a></li>
                                        <li><a href="{{ route('chekout-order') }}">Order Checkout</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Right -->
                    <div class="header-right">
                        <ul>
                            <li>
                                <div class="nav-search search-switch">
                                    <span class="flaticon-search"></span>
                                </div>
                            </li>
                            <li> <a href="{{route('login') }}"><span class="flaticon-user"></span></a></li>
                            <li><a href="{{ route('Quantityprod') }}"><span class="flaticon-shopping-cart"></span></a> </li>
                            <li><a href="{{ route('log.out') }}"><span >logout</span></a> </li>
                        </ul>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>




