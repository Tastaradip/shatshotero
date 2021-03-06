@extends('admin.common.master')

@section('page-css')
 <!-- Dropzone css -->
<link href="{{asset('admin/plugins/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css">

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
                    <li class="breadcrumb-item active">Images</li>
                </ol>
            </div>
        </div>
    </div>
</div> 

 <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <label>Gallery Images</label>
                <form method="POST" action="{{route($route.'images.store', ['id'=>$product->id])}}" enctype="multipart/form-data" class="dropzone dropzone-gallery" id="dropzone">
                    @csrf
                </form> 
            </div>
        </div>  

        <div class="load-images row" style="margin-top: 100px;">   
                @if(!empty($product->galleryImages()))
                @foreach($product->galleryImages() as $gallery_img)           
                    <div class="col-md-2">
                        <img class="img-fluid" src="{{ $file_path_view.$gallery_img->url}}" alt="gallery img" style="width: 100%; height: 300px">
                        <a href="{{route($route.'images.delete',['id'=>$gallery_img->id])}}" class="btn btn-danger" id="deleteRecord" data-id="{{ $gallery_img->id }}">Remove</a>
                    </div>  
                @endforeach 
                @endif
        </div>

</div> 

@endsection

@section('page-js')
<!-- Dropzone js -->
<script src="{{asset('admin/plugins/dropzone/dist/dropzone.js')}}"></script>
<script type="text/javascript">
	    Dropzone.options.dropzone = ('.dropzone-gallery',
         {
            maxFilesize: 6,
            maxFiles: 6,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: false,
            timeout: 50000,
       
            success: function(file, response) 
            {
                //$(file.previewElement).addClass("dz-success-mark");
                console.log(response);
            },
            error: function(file, message)
            {
               $(file.previewElement).addClass("dz-error").find('.dz-error-message').text(message.message);
               return false;
            }

		});


        $("#deleteRecord").click(function(){
            var id = $(this).attr("data-id");
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax(
            {
                url: "admin/products/"+id+"/images",
                type: 'get',
                dataType: 'json',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function (response){
                    location.reload();
                }
            });
        });
</script>
@endsection