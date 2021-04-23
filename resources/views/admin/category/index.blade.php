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
                    <li class="breadcrumb-item active">All</li>
                </ol>
            </div>
        </div>
    </div>
</div> 
<div class="container-fluid">

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="mt-0 header-title">Category List</h4>
                            <br>

                            <div class="table-responsive">
                                <table class="table table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Role</th>
                                            <th>Main</th>
                                            <th>Sub</th>
                                            <th>Status</th>
                                            <th>Featured</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($id=0)
                                        @foreach($categories as $category)
                                        <tr>
                                            <th scope="row">{{$id++}}</th>
                                            <td>{{$category->name}}</td>
                                            <td>@if($category->role == 'main') Main Category 
                                                @elseif($category->role == 'sub') Sub Category 
                                                @elseif($category->role == 'child') Child Category 
                                                @endif
                                            </td>
                                            <td>@if($category->role != 'main') {{\App\Models\Category::find($category->mainid)->name}} @endif</td>
                                            <td>@if($category->role == 'child') {{\App\Models\Category::find($category->subid)->name}} @endif</td>
                                            <td>@if($category->status=='1') Active @else Inactive @endif</td>
                                            <td>@if($category->featured=='1') Yes @else No @endif</td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#categoryEditModal-{{$category->id}}" title="edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void(0)" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#categoryDeleteModal-{{$category->id}}" title="delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <!-- modal -->
                                        <div class="modal fade bs-example-modal-center" id="categoryEditModal-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="categoryEditModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title mt-0">Edit Category</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form id="form" method="post" action="{{ route($route.'update', [$category->id]) }}" style="width: 100%;">   
                                                        <div class="modal-body">           
                                                               {{ method_field('PUT') }}
                                                               {{csrf_field()}}
                                                               <!-- Modal body -->
                                                                <div class="modal-body">
                                                                    <div class="form-group row">
                                                                        <label for="name" class="col-form-label">Name</label>
                                                                        <input type="text" class="form-control" id="name" name="name" value="{{($category->name) ? $category->name:''}}">
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label">Role</label>
                                                                            <select class="form-control" name="role">
                                                                                <option value="main" @if($category->role == 'main') selected="selected" @endif>Main Category</option>
                                                                                <option value="sub" @if($category->role == 'sub') selected="selected" @endif>Sub Category</option>
                                                                                <option value="child" @if($category->role == 'child') selected="selected" @endif>Child Category</option>
                                                                            </select>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label">Main Category</label>
                                                                            <select class="form-control" name="mainid">
                                                                                @foreach($main_categories as $main_cat)
                                                                                <option value="{{$main_cat->id}}">{{$main_cat->name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label">Sub Category</label>
                                                                            <select class="form-control" name="subid">
                                                                                @foreach($sub_categories as $sub_cat)
                                                                                <option value="{{$sub_cat->id}}">{{$sub_cat->name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label">Status</label>
                                                                            <select class="form-control" name="status">
                                                                                <option value="1" @if($category->status == '1') selected="selected" @endif>Active</option>
                                                                                <option value="0" @if($category->status == '0') selected="selected" @endif>Inctive</option>
                                                                            </select>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-form-label">Featured</label>
                                                                            <input type="radio" id="yes" name="featured" value="1" style="margin-left: 16px; margin-right: 2px;" @if($category->featured == '1') checked="checked" @endif>
                                                                            <label for="yes" style="padding-top: 8px;">Yes</label>
                                                                            <input type="radio" id="no" name="featured" value="0" style="margin-left: 12px; margin-right: 2px;" @if($category->featured == '0') checked="checked" @endif>
                                                                            <label for="no" style="padding-top: 8px;">No</label>
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
                                        <div class="modal fade bs-example-modal-center" id="categoryDeleteModal-{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="categoryDeleteModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0">{{$category->name}}</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete?</p>
                                                        </div>
                                                        <div class="modal-footer">   
                                                            <form action="{{ route($route.'destroy', [$category->id]) }}" method="POST">
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <!-- end col -->
            </div>
            <!-- end row -->


        </div>
        <!-- end container-fluid -->

@endsection