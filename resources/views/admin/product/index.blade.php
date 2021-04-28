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
                @foreach($products as $product)
                <div class="col-md-6 col-xl-3">

                    <!-- Simple card -->
                    <div class="card">
                        <img class="card-img-top img-fluid" src="{{ $file_path_view.$product->featuredImage() }}" alt="image" style="height: 420px;">
                        <div class="card-body">
                            <h4 class="card-title font-16 mt-0">{{$product->code}} - {{$product->title}}</h4>
                            <p class="card-text">{{\App\Models\Category::find($product->category_id)->name}}</p>
                            <a href="{{ route($route.'edit', [$product->id]) }}" class="btn btn-primary waves-effect waves-light" title="edit"><i class="fas fa-pencil-alt"></i></a>
                            <a href="{{ route($route.'show', [$product->id]) }}" class="btn btn-info waves-effect waves-light" title="view"><i class="fas fa-eye"></i></a>
                            <a href="{{ route($route.'images', [$product->id]) }}" class="btn btn-success waves-effect waves-light" title="images"><i class="fas fa-image"></i></a>
                            <a href="javascript:void(0)" class="btn btn-danger waves-effect waves-light" data-toggle="modal" data-target="#ProductDeleteModal-{{$product->id}}" title="delete"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>

                </div>
                <!-- end col -->
                <!-- modal -->
                <div class="modal fade bs-example-modal-center" id="ProductDeleteModal-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="ProductDeleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">{{$product->code}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete?</p>
                                </div>
                                <div class="modal-footer">   
                                    <form action="{{ route($route.'destroy', [$product->id]) }}" method="POST">
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