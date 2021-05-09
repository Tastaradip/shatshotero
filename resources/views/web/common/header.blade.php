 <!-- Start of header area -->
        <header class="header-area header-wrapper">
            <div class="header-top-bar black-bg clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="login-register-area">
                                <ul>
                                    <li><a href="{{route('web.customer.login')}}">Login</a></li>
                                    <li><a href="{{route('web.customer.register')}}">Register</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-md-block">
                            <div class="social-search-area text-center">
                                <div class="social-icon socile-icon-style-2">
                                    <ul>
                                        <li><a href="https://www.facebook.com/7shotero" title="facebook"><i class="fa fa-facebook"></i></a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="cart-currency-area login-register-area text-right">
                                <ul>
                                    <li>
                                        <div class="header-cart">
                                            <div class="cart-icon"> <a href="{{route('web.cart.index')}}">Cart<i class="zmdi zmdi-shopping-cart"></i></a>
                                                @if(Auth::guard('customer')->check())
                                                <span>{{\Cart::session(Auth::guard('customer')->user()->id)->getContent()->count()}}</span>
                                                @endif
                                                 </div>
                                           <!--  <div class="cart-content-wraper">
                                                <div class="cart-single-wraper">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="images/product/01.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <div class="cart-name"> <a href="#">Aenean Eu Tristique</a>
                                                        </div>
                                                        <div class="cart-price"> $70.00 </div>
                                                        <div class="cart-qty"> Qty: <span>1</span> </div>
                                                    </div>
                                                    <div class="remove"> <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart-single-wraper">
                                                    <div class="cart-img">
                                                        <a href="#"><img src="images/product/02.jpg" alt=""></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <div class="cart-name"> <a href="#">Aenean Eu Tristique</a>
                                                        </div>
                                                        <div class="cart-price"> $70.00 </div>
                                                        <div class="cart-qty"> Qty: <span>1</span> </div>
                                                    </div>
                                                    <div class="remove"> <a href="#"><i class="zmdi zmdi-close"></i></a>
                                                    </div>
                                                </div>
                                                <div class="cart-subtotal"> Subtotal: <span>$200.00</span> </div>
                                                <div class="cart-check-btn">
                                                    <div class="view-cart"> <a class="btn-def" href="cart.html">View
                                                            Cart</a> </div>
                                                    <div class="check-btn"> <a class="btn-def" href="checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="header-middle-area">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="logo ptb-20"><a href="index.html">
                                        <img src="{{asset('web/images/logo/logo.jpg')}}" alt="main logo" style="width: 32%"></a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-10 d-none d-md-block">
                                <nav id="primary-menu">
                                    <ul class="main-menu">
                                        <!-- <li class="current"><a class="active" href="{{route('web.index')}}">Home</a>
                                        </li> -->
                                        <li><a href="{{route('web.index')}}">Home</a>
                                        </li>
                                        @php
                                            $main_categories = \App\Models\Category::where('role','main')->get();
                                            $sub_categories = \App\Models\Category::where('role','sub')->get();
                                            $child_categories = \App\Models\Category::where('role','child')->get();
                                        @endphp
                                        @if(!empty($main_categories)) 
                                        @foreach($main_categories as $main_category)
                                        <li class="mega-parent pos-rltv"><a href="shop.html">{{$main_category->name}}</a>
                                            <div class="mega-menu-area mma-800">
                                                @if(!empty($sub_categories)) 
                                                    @foreach($sub_categories as $sub_category)
                                                    @if($sub_category->mainid == $main_category->id)
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title uppercase">{{$sub_category->name}}</li>
                                                        @if(!empty($child_categories))
                                                            @foreach($child_categories as $child_category)
                                                            @if($child_category->subid == $sub_category->id)
                                                            <li><a href="shop.html">{{$child_category->name}}</a></li>
                                                            @endif
                                                            @endforeach
                                                        @endif
                                                    </ul>
                                                    <div class="mega-banner-img">
                                                        <a href="single-product.html"><img src="images/banner/banner-fashion-02.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    @endif
                                                    @endforeach 
                                                @endif
                                            </div>
                                        </li>
                                        @endforeach
                                        @endif
                                        <li><a href="{{route('web.about')}}">ABOUT</a></li>
                                    </ul>
                                </nav>
                            </div>

        
                            <!-- mobile-menu-area start -->
                            <div class="mobile-menu-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <nav id="dropdown">
                                                <ul>
                                                    <li><a href="index.html">Home</a>
                                                        <ul>
                                                            <li><a class="active" href="index.html">Home One</a></li>
                                                            <li><a href="index-2.html">Home Two</a></li>
                                                            <li><a href="index-boxed-01.html">Home Three (Boxed)</a>
                                                            </li>
                                                            <li><a href="index-boxed-02.html">Home Four (Boxed)</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Man</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shop.html">Shirt 01</a></li>
                                                            <li><a href="shop.html">Shirt 02</a></li>
                                                            <li><a href="shop.html">Shirt 03</a></li>
                                                            <li><a href="shop.html">Shirt 04</a></li>
                                                            <li><a href="shop.html">Pant 01</a></li>
                                                            <li><a href="shop.html">Pant 02</a></li>
                                                            <li><a href="shop.html">Pant 03</a></li>
                                                            <li><a href="shop.html">Pant 04</a></li>
                                                            <li><a href="shop.html">T-Shirt 01</a></li>
                                                            <li><a href="shop.html">T-Shirt 02</a></li>
                                                            <li><a href="shop.html">T-Shirt 03</a></li>
                                                            <li><a href="shop.html">T-Shirt 04</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="shop.html">Shop</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shop.html">Sharee 01</a></li>
                                                            <li><a href="shop.html">Sharee 02</a></li>
                                                            <li><a href="shop.html">Sharee 03</a></li>
                                                            <li><a href="shop.html">Sharee 04</a></li>
                                                            <li><a href="shop.html">Sharee 05</a></li>
                                                            <li><a href="shop.html">Lahenga 01</a></li>
                                                            <li><a href="shop.html">Lahenga 02</a></li>
                                                            <li><a href="shop.html">Lahenga 03</a></li>
                                                            <li><a href="shop.html">Lahenga 04</a></li>
                                                            <li><a href="shop.html">Lahenga 05</a></li>
                                                            <li><a href="shop.html">Sandel 01</a></li>
                                                            <li><a href="shop.html">Sandel 02</a></li>
                                                            <li><a href="shop.html">Sandel 03</a></li>
                                                            <li><a href="shop.html">Sandel 04</a></li>
                                                            <li><a href="shop.html">Sandel 05</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Shortcode</a>
                                                        <ul class="single-mega-item">
                                                            <li><a href="shortcode-banner.html"
                                                                    target="_blank">shortcode-banner</a></li>
                                                            <li><a href="shortcode-best-top-on-sale-slider.html"
                                                                    target="_blank">too-on-sale</a></li>
                                                            <li><a href="shortcode-blog-item.html" target="_blank">Short
                                                                    Blog Item</a></li>
                                                            <li><a href="shortcode-brand-prodcut.html" target="_blank">Brand
                                                                    Product</a></li>
                                                            <li><a href="shortcode-brand-slider.html" target="_blank">Brand
                                                                    Slider</a></li>
        
                                                            <li><a href="shortcode-breadcrumb.html"
                                                                    target="_blank">Breadcrumb</a></li>
                                                            <li><a href="shortcode-related-product.html" target="_blank">Related
                                                                    Product</a></li>
                                                            <li><a href="shortcode-service.html" target="_blank">Service</a>
                                                            </li>
                                                            <li><a href="shortcode-skill.html" target="_blank">Skill</a>
                                                            </li>
                                                            <li><a href="shortcode-slider.html" target="_blank">Slider</a></li>
        
                                                            <li><a href="shortcode-team.html" target="_blank">Team</a>
                                                            </li>
                                                            <li><a href="shortcode-testimonial.html"
                                                                    target="_blank">Testimonial</a></li>
                                                            <li><a href="shortcode-why-choose-us.html" target="_blank">Why
                                                                    Choose Us</a></li>
                                                        </ul>
                                                    </li>
                                                    <li> <a href="#">Pages</a>
                                                        <ul class="single-mega-item coloum-4">
                                                            <li><a href="about-us.html" target="_blank">About-us</a>
                                                            </li>
                                                            <li><a href="blog.html" target="_blank">Blog</a></li>
                                                            <li><a href="blog-right.html" target="_blank">Blog-Right</a>
                                                            </li>
                                                            <li><a href="single-blog.html" target="_blank">Single
                                                                    Blog</a></li>
                                                            <li><a href="single-blog-right.html" target="_blank">Single
                                                                    Blog Right</a></li>
                                                            <li><a href="blog-full.html" target="_blank">Blog-Fullwidth</a></li>
                                                            <li class="menu-title uppercase">pages-02</li>
                                                            <li><a href="blog-full-right.html" target="_blank">Blog Ful
                                                                    Rightl</a></li>
                                                            <li><a href="cart.html" target="_blank">Cart</a></li>
                                                            <li><a href="checkout.html" target="_blank">Checkout</a>
                                                            </li>
                                                            <li><a href="compare.html" target="_blank">Compare</a></li>
                                                            <li><a href="complete-order.html" target="_blank">Complete
                                                                    Order</a></li>
                                                            <li><a href="contact-us.html" target="_blank">Contact US</a>
                                                            </li>
                                                            <li class="menu-title uppercase">pages-03</li>
                                                            <li><a href="login.html" target="_blank">Login</a></li>
                                                            <li><a href="my-account.html" target="_blank">My Account</a>
                                                            </li>
                                                            <li><a href="shop-full-grid.html" target="_blank">Shop Full
                                                                    Grid</a></li>
                                                            <li><a href="shop-full-list.html" target="_blank">Shop Full
                                                                    List</a></li>
                                                            <li><a href="shop-list-right-sidebar.html" target="_blank">Shop List
                                                                    Right</a></li>
                                                            <li><a href="shop-list.html" target="_blank">Shop List</a>
                                                            </li>
                                                            <li class="menu-title uppercase">pages-03</li>
                                                            <li><a href="shop-right-sidebar.html" target="_blank">Shop
                                                                    Right</a></li>
                                                            <li><a href="shop.html" target="_blank">Shop</a></li>
                                                            <li><a href="single-product.html" target="_blank">Single
                                                                    Prodcut</a></li>
                                                            <li><a href="wishlist.html" target="_blank">Wishlist</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="about-us.html">about</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--mobile menu area end-->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End of header area -->