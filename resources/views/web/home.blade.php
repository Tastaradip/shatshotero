@extends('web.common.master')

@section('content')

        <!--slider area start-->
        <div class="slider-area pos-rltv carosule-pagi cp-line">
            <div class="active-slider">
                @if(!empty($sliders))
                @foreach($sliders as $slider)
                <div class="single-slider pos-rltv">
                    <div class="slider-img"><img src="{{$slider_file_path_view.$slider->getImage()}}" alt=""></div>
                    <div class="slider-content pos-abs">
                        <h4>{{$slider->title}}</h4>
                        <h1 class="uppercase pos-rltv underline">{!! $slider->caption !!}</h1>
                        <a href="#" class="btn-def btn-white">Shop Now</a>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        <!--slider area start-->

        <!--delivery service start-->
        <div class="delivery-service-area ptb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service shadow-box text-center">
                            <img src="https://demo.hasthemes.com/clothing-preview/clothing/images/icons/coupon.png" alt="">
                            <h5>Taking Order</h5>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service shadow-box text-center">
                            <img src="https://demo.hasthemes.com/clothing-preview/clothing/images/icons/garantee.png" alt="">
                            <h5>Cash on Delivery</h5>
                        </div>
                    </div>    
                    <div class="col-lg-4 col-md-6">
                        <div class="single-service shadow-box text-center">
                            <img src="https://demo.hasthemes.com/clothing-preview/clothing/images/icons/support.png" alt="">
                            <h5>24x7 Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--delivery service start-->


        <!--new arrival area start-->
        <div class="new-arrival-area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">New Arrival</h5>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                            @if(!empty($products))
                            @foreach($products as $product)
                            <div class="col-lg-6">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="product-label">
                                            <div class="new">{{$product->code}}</div>
                                        </div>
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="{{route('web.products.show', [$product->id])}}"> 
                                                <img alt="" src="{{ $file_path_view.$product->featuredImage() }}" class="primary-image"> 
                                                @if($product->galleryImageFirst() != '')<img alt="" src="{{ $file_path_view.$product->galleryImageFirst() }}" class="secondary-image"> @endif
                                            </a>
                                        </div>
                                        <div class="product-icon socile-icon-tooltip text-center">
                                            <ul>
                                                <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                        data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                        data-toggle="modal" data-target=".modal"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">{{$product->title}}</a>
                                            @php($cat_id = \App\Models\Category::find($product->category_id))
                                            @if($cat_id != '')                           
                                            <span>{{$cat_id->name}}</span>
                                            @endif
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-price">
                                                <div class="new-price"> {{$product->price}} tk </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--new arrival area end-->


        <!--featured area start-->
        @if($featured_products != '[]')
        <div class="new-arrival-area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">Featured</h5>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                            @foreach($featured_products as $product)
                            <div class="col-lg-6">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="product-label">
                                            <div class="new">{{$product->code}}</div>
                                        </div>
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="{{route('web.products.show', [$product->id])}}"> 
                                                <img alt="" src="{{ $file_path_view.$product->featuredImage() }}" class="primary-image"> 
                                                @if($product->galleryImageFirst() != '')<img alt="" src="{{ $file_path_view.$product->galleryImageFirst() }}" class="secondary-image"> @endif
                                            </a>
                                        </div>
                                        <div class="product-icon socile-icon-tooltip text-center">
                                            <ul>
                                                <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                        data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                        data-toggle="modal" data-target=".modal"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">{{$product->title}}</a>
                                            @php($cat_id = \App\Models\Category::find($product->category_id))
                                            @if($cat_id != '')                           
                                            <span>{{$cat_id->name}}</span>
                                            @endif
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-price">
                                                <div class="new-price"> {{$product->price}} tk </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!--featured area end-->

        <!--discount area start-->
        @if($discount_products != '[]')
        <div class="new-arrival-area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">Special Offer</h5>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                            @foreach($discount_products as $product)
                            <div class="col-lg-6">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="product-label">
                                            <div class="new">{{$product->code}}</div>
                                        </div>
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="{{route('web.products.show', [$product->id])}}"> 
                                                <img alt="" src="{{ $file_path_view.$product->featuredImage() }}" class="primary-image"> 
                                                @if($product->galleryImageFirst() != '')<img alt="" src="{{ $file_path_view.$product->galleryImageFirst() }}" class="secondary-image"> @endif
                                            </a>
                                        </div>
                                        <div class="product-icon socile-icon-tooltip text-center">
                                            <ul>
                                                <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                        data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                        data-toggle="modal" data-target=".modal"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">{{$product->title}}</a>
                                            @php($cat_id = \App\Models\Category::find($product->category_id))
                                            @if($cat_id != '')                           
                                            <span>{{$cat_id->name}}</span>
                                            @endif
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-price">
                                                <div class="new-price"> {{$product->price}} tk </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!--discount area end-->

        <!--best seller area start-->
        @if($discount_products != '[]')
        <div class="new-arrival-area pt-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="heading-title heading-style pos-rltv mb-50 text-center">
                            <h5 class="uppercase">Best Seller</h5>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="total-new-arrival new-arrival-slider-active carsoule-btn row">
                            @foreach($best_seller_products as $product)
                            <div class="col-lg-6">
                                <!-- single product start-->
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="product-label">
                                            <div class="new">{{$product->code}}</div>
                                        </div>
                                        <div class="single-prodcut-img  product-overlay pos-rltv">
                                            <a href="{{route('web.products.show', [$product->id])}}"> 
                                                <img alt="" src="{{ $file_path_view.$product->featuredImage() }}" class="primary-image"> 
                                                @if($product->galleryImageFirst() != '')<img alt="" src="{{ $file_path_view.$product->galleryImageFirst() }}" class="secondary-image"> @endif
                                            </a>
                                        </div>
                                        <div class="product-icon socile-icon-tooltip text-center">
                                            <ul>
                                                <li><a href="#" data-tooltip="Add To Cart" class="add-cart"
                                                        data-placement="left"><i class="fa fa-cart-plus"></i></a></li>
                                                <li><a href="#" data-tooltip="Wishlist" class="w-list"><i
                                                            class="fa fa-heart-o"></i></a></li>
                                                <li><a href="#" data-tooltip="Compare" class="cpare"><i
                                                            class="fa fa-refresh"></i></a></li>
                                                <li><a href="#" data-tooltip="Quick View" class="q-view"
                                                        data-toggle="modal" data-target=".modal"><i
                                                            class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="prodcut-name"> <a href="single-product.html">{{$product->title}}</a>
                                            @php($cat_id = \App\Models\Category::find($product->category_id))
                                            @if($cat_id != '')                           
                                            <span>{{$cat_id->name}}</span>
                                            @endif
                                        </div>
                                        <div class="prodcut-ratting-price">
                                            <div class="prodcut-price">
                                                <div class="new-price"> {{$product->price}} tk </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- single product end-->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!--best seller area end-->







        @endsection

 