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
                    <li class="breadcrumb-item active">{{$title}}</li>
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

                            <h4 class="mt-0 header-title">Order List</h4>
                            <br>

                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Customer Name</th>
                                            <th>Type Quantity</th>
                                            <th>Price</th>
                                            <th>Order Date</th>
                                            <th>Shipping District</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($orders))
                                        @php($id=1)
                                        @foreach($orders as $order)
                                        @php($customer = \App\Models\Customer::find($order->customer_id))
                                        <tr>
                                            <th scope="row">{{$id++}}</th>
                                            <td>{{$customer->name}}</td>
                                            <td>{{$order->quantity}}</td>
                                            <td>{{$order->price}} tk</td>
                                            <td>{{$order->created_at}}</td>
                                            <td>{{$order->district}}</td>
                                            <td>@if($order->status=="pending")
                                                    <span class="badge badge-secondary">pending</span>
                                                @elseif($order->status=="completed")
                                                    <span class="badge badge-success">completed</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route($route.'show', [$order->id])}}" class="btn btn-primary waves-effect waves-light" title="view">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                @if($order->status=="pending")
                                                <a href="{{route($route.'update', [$order->id])}}" class="btn btn-success waves-effect waves-light" title="complete">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                                @endif
                                            </td>
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

</div>
<!-- end container-fluid -->
@endsection