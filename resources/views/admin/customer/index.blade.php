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

                            <h4 class="mt-0 header-title">Customer List</h4>
                            <br>

                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Registration Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($customers))
                                        @php($id=1)
                                        @foreach($customers as $customer)
                                        <tr>
                                            <th scope="row">{{$id++}}</th>
                                            <td>{{$customer->name}}</td>
                                            <td>{{$customer->email}}</td>
                                            <td>{{$customer->created_at}}
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