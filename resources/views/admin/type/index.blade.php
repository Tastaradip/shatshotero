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
            	<div class="col-md-6 col-lg-6 col-sm-12">
            		<div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Type List</h4>
                            <br>

                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($types))
                                        @php($id=1)
                                        @foreach($types as $type)
                                        <tr>
                                            <th scope="row">{{$id++}}</th>
                                            <td>{{$type->title}}</td>
                                            <td>@if($type->status=='1') Active @else Inactive @endif</td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#typeEditModal-{{$type->id}}" title="edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#typeDeleteModal-{{$type->id}}" title="delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- modal -->
                                        <div class="modal fade bs-example-modal-center" id="typeEditModal-{{$type->id}}" tabindex="-1" role="dialog" aria-labelledby="typeEditModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0">Edit type</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form id="form" method="post" action="{{ route($route.'update', [$type->id]) }}" style="width: 100%;">   
                                                        <div class="modal-body">           
                                                               {{ method_field('PUT') }}
                                                               {{csrf_field()}}
                                                               <!-- Modal body -->
                                                                <div class="modal-body">
                                                                    <div class="form-group row">
                                                                        <label for="title" class="col-form-label">Name</label>
                                                                        <input type="text" class="form-control" id="title" name="title" value="{{($type->title) ? $type->title:''}}">
                                                                    </div>
                                                                    
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label">Status</label>
                                                                            <select class="form-control" name="status">
                                                                                <option value="1" @if($type->status == '1') selected="selected" @endif>Active</option>
                                                                                <option value="0" @if($type->status == '0') selected="selected" @endif>Inctive</option>
                                                                            </select>
                                                                    </div>
                                                                </div> 
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </div>
                                                    </form>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                        <!-- modal -->
                                        <div class="modal fade bs-example-modal-center" id="typeDeleteModal-{{$type->id}}" tabindex="-1" role="dialog" aria-labelledby="typeDeleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0">{{$type->title}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete?</p>
                                                        </div>
                                                        <div class="modal-footer">   
                                                            <form action="{{ route($route.'destroy', [$type->id]) }}" method="POST">
                                                                {{ csrf_field() }}
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-primary">Yes, Delete</button>
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            	</div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <h4 class="mt-0 header-title">Add Type</h4>
                            <br>
                            <form action="{{route($route.'store')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="title" id="title">
                                    </div>
                                </div>
                               <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="status">
                                            <option value="1">Active</option>
                                            <option value="0">Inctive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="button-items row" style="float:right">
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                                    <button type="button" class="btn btn-light waves-effect waves-light">Reset</button>
                                </div>
                        	</form>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

</div>
<!-- end container-fluid -->
@endsection