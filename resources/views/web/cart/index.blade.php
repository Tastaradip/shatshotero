@extends('web.common.master')

@section('content')
 @if(Session::has('message'))
    <div class="alert alert-{{ Session::get('message-type') }} alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button" style="line-height: 0.5">×</button>
        <i class="glyphicon glyphicon-{{ Session::get('message-type') == 'success' ? 'ok' : 'remove'}}"></i> {{ Session::get('message') }}
    </div>
 @endif
<!--cart-checkout-area start -->
<div class="cart-checkout-area  pt-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-area">
                    <div class="title-tab-product-category row">
                        <div class="col-lg-12 text-center pb-60">
                            <ul class="nav heading-style-3" role="tablist">
                                <li role="presentation"><a class="active shadow-box" href="#cart"
                                        aria-controls="cart" role="tab" data-toggle="tab"><span>01</span>
                                        Shopping
                                        cart</a></li>
                                <li role="presentation"><a class="shadow-box" href="#checkout"
                                        aria-controls="checkout" role="tab"
                                        data-toggle="tab"><span>02</span>Checkout</a></li>
                                <li role="presentation"><a class="shadow-box" href="#complete-order"
                                        aria-controls="complete-order" role="tab"
                                        data-toggle="tab"><span>03</span>
                                        complete-order</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="content-tab-product-category pb-70">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="cart">
                                <!-- cart are start-->
                                <div class="cart-page-area">
                                        <div class="table-responsive mb-20">
                                            <table class="shop_table-2 cart table">
                                                <thead>
                                                    <tr>
                                                        <th class="product-thumbnail ">Image</th>
                                                        <th class="product-name ">Product Name</th>
                                                        <th class="product-price ">Unit Price</th>
                                                        <th class="product-quantity">Quantity</th>
                                                        <th class="product-subtotal ">Total</th>
                                                        <th class="product-remove">Remove</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                	@foreach($items as $item)
                                                	@php
                                                		$product = \App\Models\Product::find($item->id);
                                                		$category = \App\Models\Category::find($product->category_id);
                                                	@endphp
                                                    <tr class="cart_item">
                                                        <td class="item-img">
                                                            <a href="#"><img src="{{$file_path_view.$product->featuredImage()}}"
                                                                    alt="">
                                                            </a>
                                                        </td>
                                                        <td class="item-title"> <a href="#">{{$item->code}} - {{$product->title}} </a><br>
                                                        	<span>{{$category->name}}</span>
                                                        </td>
                                                        <td class="item-price"> {{$item->price}} </td>
                                                        <form action="{{route($route.'item.update', [$item->id])}}">
                                                        <td class="item-qty">
                                                            <div class="cart-quantity">
                                                                <div class="product-qty">
                                                                    <div class="cart-quantity">
                                                                        <div class="cart-plus-minus">	
                                                                            <!-- <div class="dec qtybutton">-
                                                                            </div> -->
                                                                            <input value="{{$item->quantity}}"
                                                                                name="quantity"
                                                                                class="cart-plus-minus-box"
                                                                                type="number" id="cart-plus-minus-box">
                                                                            <!-- <div class="inc qtybutton">+
                                                                            </div> -->
                                                                            <input type="submit" class="btn btn-def" style="margin-left: 6px" value="Save">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        </form>
                                                        <td class="total-price"><strong> {{\Cart::session(Auth::guard('customer')->user()->id)->get($item->id)->getPriceSum()}}</strong>
                                                        </td>
                                                        <td class="remove-item"><a href="{{route($route.'item.remove', [$item->id])}}"><i
                                                                    class="fa fa-trash-o"></i></a></td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="cart-bottom-area">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-5">
                                                    <div class="cart-total-area">
                                                        <div
                                                            class="catagory-title cat-tit-5 mb-20 text-right">
                                                            <h3>Cart Totals</h3>
                                                        </div>
                                                        <div class="sub-shipping">
                                                            <p>Subtotal <span>{{\Cart::session(Auth::guard('customer')->user()->id)->getTotal()}} tk</span></p>
                                                            <p>Shipping <span>$3.00</span></p>
                                                        </div>
                                                        <div class="process-cart-total">
                                                            <p>Total <span>{{\Cart::session(Auth::guard('customer')->user()->id)->getTotal()}} tk</span></p>
                                                        </div>
                                                        <div class="process-checkout-btn text-right">
                                                            <a class="btn-def btn2" href="{{route('web.order.checkout')}}">Process To
                                                                Checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- cart are end-->
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--cart-checkout-area end-->

@endsection

