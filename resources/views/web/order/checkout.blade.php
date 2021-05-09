@extends('web.common.master')

@section('content')
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

                                    <div role="tabpanel" class="tab-pane fade show active " id="checkout">
                                        <!-- Checkout are start-->
                                        <div class="checkout-area">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="billing-details">
                                                                    <div class="contact-text right-side">
                                                                        <h2>Billing Details</h2>
                                                                        <form action="#">
                                                                            <div class="row">
                                                                                <div class="col-lg-6 col-md-6">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>First Name
                                                                                            <em>*</em></label>
                                                                                        <input type="text"
                                                                                            name="namm" class="info"
                                                                                            placeholder="First Name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6 col-md-6">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Last
                                                                                            Name<em>*</em></label>
                                                                                        <input type="text"
                                                                                            name="namm" class="info"
                                                                                            placeholder="Last Name">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Company Name</label>
                                                                                        <input type="text"
                                                                                            name="cpany"
                                                                                            class="info"
                                                                                            placeholder="Company Name">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Email
                                                                                            Address<em>*</em></label>
                                                                                        <input type="email"
                                                                                            name="email"
                                                                                            class="info"
                                                                                            placeholder="Your Email">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Phone
                                                                                            Number<em>*</em></label>
                                                                                        <input type="text"
                                                                                            name="phone"
                                                                                            class="info"
                                                                                            placeholder="Phone Number">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-lg-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Country
                                                                                            <em>*</em></label>
                                                                                        <select
                                                                                            class="selectpicker select-custom"
                                                                                            data-live-search="true">
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
                                                                                        <label>Address
                                                                                            <em>*</em></label>
                                                                                        <input type="text"
                                                                                            name="add1"
                                                                                            class="info mb-10"
                                                                                            placeholder="Street Address">
                                                                                        <input type="text"
                                                                                            name="add2"
                                                                                            class="info mt10"
                                                                                            placeholder="Apartment, suite, unit etc. (optional)">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div class="input-box mb-20">
                                                                                        <label>Town/City
                                                                                            <em>*</em></label>
                                                                                        <input type="text"
                                                                                            name="add1" class="info"
                                                                                            placeholder="Town/City">
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-6">
                                                                                    <div class="input-box">
                                                                                        <label>State/Divison
                                                                                            <em>*</em></label>
                                                                                        <select
                                                                                            class="selectpicker select-custom"
                                                                                            data-live-search="true">
                                                                                            <option
                                                                                                data-tokens="Barisal">
                                                                                                Barisal</option>
                                                                                            <option
                                                                                                data-tokens="Dhaka">
                                                                                                Dhaka</option>
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
                                                                                        <label>Post Code/Zip
                                                                                            Code<em>*</em></label>
                                                                                        <input type="text"
                                                                                            name="zipcode"
                                                                                            class="info"
                                                                                            placeholder="Zip Code">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div
                                                                                        class="create-acc clearfix mtb-20">
                                                                                        <div class="acc-toggle">
                                                                                            <input type="checkbox"
                                                                                                id="acc-toggle">
                                                                                            <label
                                                                                                for="acc-toggle">Create
                                                                                                an Account ?</label>
                                                                                        </div>
                                                                                        <div
                                                                                            class="create-acc-body">
                                                                                            <div class="sm-des">
                                                                                                Create an account by
                                                                                                entering the
                                                                                                information
                                                                                                below. If you are a
                                                                                                returning customer
                                                                                                please login at the
                                                                                                top
                                                                                                of the page.
                                                                                            </div>
                                                                                            <div class="input-box">
                                                                                                <label>Account
                                                                                                    password
                                                                                                    <em>*</em></label>
                                                                                                <input
                                                                                                    type="password"
                                                                                                    name="pass"
                                                                                                    class="info"
                                                                                                    placeholder="Password">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="billing-details">
                                                                    <div class="right-side">
                                                                        <div class="ship-acc clearfix">
                                                                            <div class="ship-toggle pb20">
                                                                                <input type="checkbox"
                                                                                    id="ship-toggle">
                                                                                <label for="ship-toggle">Ship to a
                                                                                    different address?</label>
                                                                            </div>
                                                                            <div class="ship-acc-body">
                                                                                <form action="#">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>First Name
                                                                                                    <em>*</em></label>
                                                                                                <input type="text"
                                                                                                    name="namm"
                                                                                                    class="info"
                                                                                                    placeholder="First Name">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Last
                                                                                                    Name<em>*</em></label>
                                                                                                <input type="text"
                                                                                                    name="namm"
                                                                                                    class="info"
                                                                                                    placeholder="Last Name">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Company
                                                                                                    Name</label>
                                                                                                <input type="text"
                                                                                                    name="cpany"
                                                                                                    class="info"
                                                                                                    placeholder="Company Name">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Email
                                                                                                    Address<em>*</em></label>
                                                                                                <input type="email"
                                                                                                    name="email"
                                                                                                    class="info"
                                                                                                    placeholder="Your Email">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Phone
                                                                                                    Number<em>*</em></label>
                                                                                                <input type="text"
                                                                                                    name="phone"
                                                                                                    class="info"
                                                                                                    placeholder="Phone Number">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Country
                                                                                                    <em>*</em></label>
                                                                                                <select
                                                                                                    class="selectpicker select-custom"
                                                                                                    data-live-search="true">
                                                                                                    <option
                                                                                                        data-tokens="Bangladesh">
                                                                                                        Bangladesh
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="India">
                                                                                                        India
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Pakistan">
                                                                                                        Pakistan
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Pakistan">
                                                                                                        Pakistan
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Srilanka">
                                                                                                        Srilanka
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Nepal">
                                                                                                        Nepal
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Butan">
                                                                                                        Butan
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="USA">
                                                                                                        USA</option>
                                                                                                    <option
                                                                                                        data-tokens="England">
                                                                                                        England
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Brazil">
                                                                                                        Brazil
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Canada">
                                                                                                        Canada
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="China">
                                                                                                        China
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Koeria">
                                                                                                        Koeria
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Soudi">
                                                                                                        Soudi Arabia
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Spain">
                                                                                                        Spain
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="France">
                                                                                                        France
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Address
                                                                                                    <em>*</em></label>
                                                                                                <input type="text"
                                                                                                    name="add1"
                                                                                                    class="info mb-10"
                                                                                                    placeholder="Street Address">
                                                                                                <input type="text"
                                                                                                    name="add2"
                                                                                                    class="info mt10"
                                                                                                    placeholder="Apartment, suite, unit etc. (optional)">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-12">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Town/City
                                                                                                    <em>*</em></label>
                                                                                                <input type="text"
                                                                                                    name="add1"
                                                                                                    class="info"
                                                                                                    placeholder="Town/City">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>State/Divison
                                                                                                    <em>*</em></label>
                                                                                                <select
                                                                                                    class="selectpicker select-custom"
                                                                                                    data-live-search="true">
                                                                                                    <option
                                                                                                        data-tokens="Barisal">
                                                                                                        Barisal
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Dhaka">
                                                                                                        Dhaka
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Kulna">
                                                                                                        Kulna
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Rajshahi">
                                                                                                        Rajshahi
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Sylet">
                                                                                                        Sylet
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Chittagong">
                                                                                                        Chittagong
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Rangpur">
                                                                                                        Rangpur
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Maymanshing">
                                                                                                        Maymanshing
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Cox">
                                                                                                        Cox's Bazar
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Saint">
                                                                                                        Saint Martin
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Kuakata">
                                                                                                        Kuakata
                                                                                                    </option>
                                                                                                    <option
                                                                                                        data-tokens="Sajeq">
                                                                                                        Sajeq
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div
                                                                                                class="input-box mb-20">
                                                                                                <label>Post Code/Zip
                                                                                                    Code<em>*</em></label>
                                                                                                <input type="text"
                                                                                                    name="zipcode"
                                                                                                    class="info"
                                                                                                    placeholder="Zip Code">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form">
                                                                            <div class="input-box">
                                                                                <label>Order Notes</label>
                                                                                <textarea
                                                                                    placeholder="Notes about your order, e.g. special notes for delivery."
                                                                                    class="area-tex"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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