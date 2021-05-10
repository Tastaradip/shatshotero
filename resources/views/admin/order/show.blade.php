@extends('admin.common.master')

@section('content-own')   
<div class="row align-items-center bg-dark">
    <div class="col-md-12">
        <div class="container-fluid">
            <div class="page-title-box">
                <h4 class="page-title">{{$title}}</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Shat Shotero</a>
                    </li>
                    <li class="breadcrumb-item">
                            <a href="javascript:void(0);">{{$title}}</a>
                    </li>
                    <li class="breadcrumb-item active">Show</li>
                </ol>
            </div>
        </div>
    </div>
</div> 

<div class="container-fluid">

    <div class="row">
    	<div class="col-md-12 col-lg-12 col-sm-12">
    		<div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Customer Details</h4>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>District</th>
                                    <th>ZIP Code</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{$customer->name}}</th>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->address}}</td>
                                    <td>{{$order->district}} tk</td>
                                    <td>{{$order->zipcode}}</td>
                                    <td>{{$order->country}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    	</div>
        <!-- end col -->
    </div>
    <!-- end row -->


   <div class="row">
    	<div class="col-md-12 col-lg-12 col-sm-12">
    		<div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Ordered Products Details</h4>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Title (Category)</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@if(!empty($ordered_products))
                            	@foreach($ordered_products as $product)
                            	@php($category = \App\Models\Category::find($product->category_id))
                                <tr>
                                    <th scope="row">{{$product->code}}</th>
                                    <td>{{$product->title}} ({{$category->name}})</td>
                                    <td><img src="{{$file_path_view.$product->featuredImage()}}" style="width: 160px"></td>
                                    <td>{{\App\Models\Order::getQtyById($order->id, $product->id)}}</td>
                                    <td>{{$product->price}} tk</td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    	</div>
        <!-- end col -->
    </div>
    <!-- end row -->


    <div class="row">
    	<div class="col-md-12 col-lg-12 col-sm-12">
    		<div class="card">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Order Details</h4>
                    <br>

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Ordered Date</th>
                                    <th>Total Price</th>
                                    <th>Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{$order->created_at}}</th>
                                    <td>{{$order->price}} tk</td>
                                    <td>{!! $order->notes !!}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    	</div>
        <!-- end col -->
    </div>
    <!-- end row -->


</div>
<!-- end container-fluid -->
@endsection