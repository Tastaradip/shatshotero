@extends('admin.common.master')
@section('page-css')
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
                @foreach($sliders as $slider)
                <div class="col-md-6 col-xl-3">

                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{$file_path_view.$slider->getImage()}}" alt="image" style="height: 420px;">
                        <div class="card-body">
                            <h4 class="card-title font-16 mt-0">{{$slider->title}}</h4>
                            <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#sliderEditModal-{{$slider->id}}" title="edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="javascript:void(0)" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#SliderDeleteModal-{{$slider->id}}" title="delete">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <!-- modal -->
                <div class="modal fade bs-example-modal-center" id="sliderEditModal-{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="sliderEditModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Edit Slider</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="form" method="post" action="{{ route($route.'update', [$slider->id]) }}" style="width: 100%;">   
                                <div class="modal-body">           
                                       {{ method_field('PUT') }}
                                       {{csrf_field()}}
                                       <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="title" id="example-text-input" value="{{$slider->title?$slider->title:''}}" required="required">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="caption" class="col-sm-2 col-form-label">Caption</label>
                                                <div class="col-sm-10">
                                                    <textarea class="summernote" name="caption" id="caption">{!! $slider->caption !!}</textarea>
                                                </div>
                                            </div> 
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Status</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="status">
                                                        <option value="1" @if($slider->status==1) selected="selected" @endif>Active</option>
                                                        <option value="0" @if($slider->status==0) selected="selected" @endif>Inctive</option>
                                                    </select>
                                                </div>
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
                <div class="modal fade bs-example-modal-center" id="SliderDeleteModal-{{$slider->id}}" tabindex="-1" role="dialog" aria-labelledby="SliderDeleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">{{$slider->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete?</p>
                                </div>
                                <div class="modal-footer">   
                                    <form action="{{ route($route.'destroy', [$slider->id]) }}" method="POST">
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
            </div>
            <!-- end row -->

        </div>
        <!-- end container-fluid -->
@endsection
@section('page-js')
<!--Summernote js-->
<script type="text/javascript" src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        $('.summernote').summernote({
            height: 100, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true // set focus to editable area after initializing summernote
        });
    });
</script>
@endsection
