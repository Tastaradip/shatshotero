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
                                        <li role="presentation"><a class="shadow-box" href="#cart" aria-controls="cart"
                                                role="tab" data-toggle="tab"><span>01</span>
                                                Shopping
                                                cart</a></li>
                                        <li role="presentation"><a class="active shadow-box" href="#checkout"
                                                aria-controls="checkout" role="tab"
                                                data-toggle="tab"><span>02</span>Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="content-tab-product-category pb-70">
                                <!-- Tab panes -->
                                <div class="tab-content">

                                    <div role="tabpanel" class="tab-pane fade show active " id="checkout">
                                        <!-- Checkout are start-->
                                        <form action="{{route('web.order.store')}}" method="POST">
                                            {{csrf_field()}}
                                        <div class="checkout-area">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="billing-details">
                                                                    <div class="contact-text right-side">
                                                                        <h2>Billing/Shipping Details</h2>
                                                                        <form action="#">
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Phone Number<em>*</em></label>
                                                                                        <input type="text" name="phone" class="info" placeholder="Phone Number" required="required">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Country<em>*</em></label>
                                                                                        <select class="selectpicker select-custom" data-live-search="true" name="country" required="required">
                                                                                            <option 
                                                                                                data-tokens="Bangladesh">
                                                                                                Bangladesh</option>
                                                                                            <option
                                                                                                data-tokens="India">
                                                                                                India</option>
                                                                                            <option
                                                                                                data-tokens="Pakistan">
                                                                                                Pakistan</option>
                                                                                            <option
                                                                                                data-tokens="Pakistan">
                                                                                                Pakistan</option>
                                                                                            <option
                                                                                                data-tokens="Srilanka">
                                                                                                Srilanka</option>
                                                                                            <option
                                                                                                data-tokens="Nepal">
                                                                                                Nepal</option>
                                                                                            <option
                                                                                                data-tokens="Butan">
                                                                                                Butan</option>
                                                                                            <option
                                                                                                data-tokens="USA">
                                                                                                USA</option>
                                                                                            <option
                                                                                                data-tokens="England">
                                                                                                England</option>
                                                                                            <option
                                                                                                data-tokens="Brazil">
                                                                                                Brazil</option>
                                                                                            <option
                                                                                                data-tokens="Canada">
                                                                                                Canada</option>
                                                                                            <option
                                                                                                data-tokens="China">
                                                                                                China</option>
                                                                                            <option
                                                                                                data-tokens="Koeria">
                                                                                                Koeria</option>
                                                                                            <option
                                                                                                data-tokens="Soudi">
                                                                                                Soudi Arabia
                                                                                            </option>
                                                                                            <option
                                                                                                data-tokens="Spain">
                                                                                                Spain</option>
                                                                                            <option
                                                                                                data-tokens="France">
                                                                                                France</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Address<em>*</em></label>
                                                                                        <textarea name="address" class="info mb-10" placeholder="Address" required="required"></textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="input-box">
                                                                                        <label>District <em>*</em></label>
                                                                                        <select class="selectpicker select-custom" data-live-search="true" name="district" required="required">
                                                                                            <option
                                                                                                data-tokens="Dhaka">
                                                                                                Dhaka</option>
                                                                                            <option
                                                                                                data-tokens="Barisal">
                                                                                                Barisal</option>
                                                                                            <option
                                                                                                data-tokens="Kulna">
                                                                                                Kulna</option>
                                                                                            <option
                                                                                                data-tokens="Rajshahi">
                                                                                                Rajshahi</option>
                                                                                            <option
                                                                                                data-tokens="Sylet">
                                                                                                Sylet</option>
                                                                                            <option
                                                                                                data-tokens="Chittagong">
                                                                                                Chittagong</option>
                                                                                            <option
                                                                                                data-tokens="Rangpur">
                                                                                                Rangpur</option>
                                                                                            <option
                                                                                                data-tokens="Maymanshing">
                                                                                                Maymanshing</option>
                                                                                            <option
                                                                                                data-tokens="Cox">
                                                                                                Cox's Bazar</option>
                                                                                            <option
                                                                                                data-tokens="Saint">
                                                                                                Saint Martin
                                                                                            </option>
                                                                                            <option
                                                                                                data-tokens="Kuakata">
                                                                                                Kuakata</option>
                                                                                            <option
                                                                                                data-tokens="Sajeq">
                                                                                                Sajeq</option>
                                                                                        </select>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="input-box">
                                                                                        <label>Post Code/Zip Code</label>
                                                                                        <input type="number" name="zipcode" class="info" placeholder="Zip Code">
                                                                                    </div>
                                                                                </div>
                                                                                <input type="hidden" name="customer_id" value="{{Auth::guard('customer')->user()->id}}">
                                                                                <input type="hidden" name="status" value="pending">
                                                                                <input type="hidden" name="price" value="{{\Cart::session(Auth::guard('customer')->user()->id)->getTotal()}} ">
                                                                                <input type="hidden" name="quantity" value="{{\Cart::session(Auth::guard('customer')->user()->id)->getContent()->count()}}">
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="billing-details">
                                                                    <div class="right-side">
                                                                        <div class="form">
                                                                            <div class="input-box mb-20">
                                                                                <label>Order Notes</label>
                                                                                <textarea placeholder="Notes about your order, e.g. special notes for delivery."
                                                                                    class="area-tex" name="notes"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="frm-action">
                                                                    <div class="input-box tci-box">
                                                                        <button type="submit" class="btn-def btn2">Submit</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                        <!-- Checkout are end-->
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