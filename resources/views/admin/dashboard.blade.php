@extends('admin.common.master')

@section('content-own')  
<!-- start content -->
            <div class="bg-dark">
                <div class="container-fluid">
					<div class="row top-content">
                        <div class="col-sm-6 col-xl-3">
                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Total Categories</h5>
                                    <h4 class="text-info pt-1 mb-0">{{\App\Models\Category::count()}}</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart1"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Total Products</h5>
                                    <h4 class="text-warning pt-1 mb-0">{{\App\Models\Product::count()}}</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Total Orders</h5>
                                    <h4 class="text-primary pt-1 mb-0">{{\App\Models\Order::count()}}</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart3"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">

                            <div class="row align-items-center p-1">
                                <div class="col-lg-6">
                                    <h5 class="font-16 text-white">Total Customers</h5>
                                    <h4 class="text-danger pt-1 mb-0">{{\App\Models\Customer::count()}}</h4>
                                </div>
                                <div class="col-lg-6">
                                    <div id="chart4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection