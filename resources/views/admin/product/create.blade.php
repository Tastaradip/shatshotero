@extends('admin.common.master')
@section('page-css')
<!-- Tagsinput -->
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/tagsinput.css')}}">
<!-- Dropify -->
<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/dropify/dropify.min.css')}}">
<!-- Summernote css -->
<link href="{{asset('admin/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet" />
@endsection
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
                <div class="col-md-2"></div>
                <div class="col-md-8 col-lg-8 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            
                            <h4 class="mt-0 header-title">Add Product</h4>
                            <br>
                            <form action="{{route($route.'store')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                                <div class="form-group row">
                                    <label for="code" class="col-sm-2 col-form-label">Code</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="code" id="code" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="title" id="title">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category_id" required="required">
                                            @foreach($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Type</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="type_id">
                                            @foreach($types as $type)
                                            <option value="{{$type->id}}">{{$type->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="summernote" name="description" id="description"></textarea>
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <label for="price" class="col-sm-2 col-form-label">Price (BDT)</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="price" id="price" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="stock" id="number" required="required">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colors" class="col-sm-2 col-form-label">Colors</label>
                                    <div class="col-sm-10">
                                         <input type="text" data-role="tagsinput" name="colors" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sizes" class="col-sm-2 col-form-label">Sizes</label>
                                    <div class="col-sm-10">
                                         <input type="text" data-role="tagsinput" name="sizes" class="form-control">
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
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Featured</label>
                                    <div class="col-sm-10" style="padding-top: 10px">
                                        <input type="radio" id="yes" name="featured" value="1">
                                        <label for="yes">Yes</label>
                                        <input type="radio" id="no" name="featured" value="0" style="margin-left: 12px;">
                                        <label for="no">No</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label" for="image">Thumbnail Image</label>
                                    <div class="col-sm-10 controls">
                                        <input type="file" class="dropify" name="image" data-max-file-size="3M" data-height="120" data-allowed-file-extensions="jpg png jpeg"/>
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
                <div class="col-md-2"></div>
                <!-- end col -->
            </div>
            <!-- end row -->

</div>
<!-- end container-fluid -->
@endsection
@section('page-js')
<!-- Tagsinput -->
<script type="text/javascript" src="{{asset('admin/js/tagsinput.js')}}"></script>
<!--Summernote js-->
<script type="text/javascript" src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        $('.summernote').summernote({
            height: 200, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    });
</script>
<!-- Dropify -->
<script type="text/javascript" src="{{asset('admin/plugins/dropify/dropify.min.js')}}"></script> 
<script type="text/javascript">
      $(document).ready(function() {
          $('.dropify').dropify();
      });   
</script>


@endsection
