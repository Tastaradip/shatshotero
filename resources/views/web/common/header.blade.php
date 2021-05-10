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
            @php
                $main_categories = \App\Models\Category::where('role','main')->get();
                $sub_categories = \App\Models\Category::where('role','sub')->get();
                $child_categories = \App\Models\Category::where('role','child')->get();
            @endphp
            <div id="sticky-header" class="header-middle-area">
                <div class="container">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="logo ptb-20"><a href="{{route('web.index')}}">
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
                                                    <li><a href="{{route('web.index')}}">Home</a>
                                                    </li>
                                                    @if(!empty($main_categories)) 
                                                    @foreach($main_categories as $main_category)
                                                    <li><a href="shop.html">{{$main_category->name}}</a>
                                                        <ul class="single-mega-item">
                                                            @if(!empty($child_categories))
                                                                @foreach($child_categories as $child_category)
                                                                @if($child_category->mainid == $main_category->id)
                                                                <li><a href="shop.html">{{$child_category->name}}</a></li>
                                                                @endif
                                                                @endforeach
                                                            @endif
                                                        </ul>
                                                    </li>
                                                    @endforeach
                                                    @endif
                                                    <li><a href="{{route('web.about')}}">About</a></li>
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