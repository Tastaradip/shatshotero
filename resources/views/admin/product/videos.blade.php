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
                    <li class="breadcrumb-item active">Videos</li>
                </ol>
            </div>
        </div>
    </div>
</div> 

 <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <label>Upload a video</label>
                <form method="POST" action="{{route($route.'videos.store', ['id'=>$product->id])}}" enctype="multipart/form-data">
                    @csrf
                   
                                <div class="form-group">
                                    <label class="form-label" for="file">Select</label>
                                    <input type="file" class="form-control" name="file"/>
                                </div>
                            
                            <button class="btn btn-success" type="submit">Submit</button>
                </form> 
            </div>
        </div>  

        <div class="row" style="margin-top: 100px;">   
                @if(!empty($product->videos))
                @foreach($product->videos as $video)           
                    <div class="col-md-2">
                       
                        <video width="100%" height="290" controls>
                                <source src="{{$video_file_path_view.$video->url}}" type="video/mp4">
                        </video>

                       
                        <form action="{{ route('admin.products.videos.delete', [$video->id]) }}" method="POST">
                           {{ csrf_field() }}
                            <button class="btn btn-danger" type="submit">Remove</button>
                        </form>
            
                    </div>  
                @endforeach 
                @endif
        </div>

</div> 

@endsection

