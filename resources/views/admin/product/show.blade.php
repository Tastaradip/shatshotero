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
	            <div class="col-12">                  
	                <div class="card">
	                    <div class="card-body">
	                    	<div class="row">	                    		
	                    		<div class="col-lg-6 col-md-6">
	                    			<h3>{{$product->code}} - {{$product->title}}</h3>
	                    			@php($cat_id = \App\Models\Category::find($product->category_id))
		                            @if($cat_id != '')                           
		                            <h6><label>Category:</label>{{$cat_id->name}}</h6>
		                            @endif
			                    	<p>{!! $product->description !!}</p>
			                    	<h6><label>Price:</label> {{$product->price}} @if($product->prev_price != '')(<label>Previous Price:</label> {{$product->prev_price}} )@endif</h6>
			                    	<h6><label>Stock:</label> {{$product->stock}}</h6>
			                    	@if($product->colors != '')<h6><label>Colors:</label> {{$product->colors}}</h6>@endif
			                    	@if($product->sizes != '')<h6><label>Sizes:</label> {{$product->sizes}}</h6>@endif
			                    	<h6><label>Status: @if($product->status == '1') Active @else Inactive @endif</label></h6>
			                    	<h6><label>Featured: @if($product->freatured == '1') Yes @else No @endif</label></h6>
	                    		</div>
	                    		<div class="col-lg-6 col-md-6">
	                    			<h6>Featured Image</h6>
	                    			<img class="img-fluid" src="{{ $file_path_view.$product->featuredImage() }}" alt="featured img">
	                    			@if(!empty($product->galleryImages()))
	                    			<h6 style="margin-top: 60px;">Gallery Images</h6>
	                    			<div class="row">
	                    			@foreach($product->galleryImages() as $gallery_img)
	                    				<div class="col-md-6" style="margin-bottom:20px">
            								<img class="img-fluid" src="{{ $file_path_view.$gallery_img->url}}" alt="gallery img">
            							</div>
        							@endforeach
        							</div>
        							@endif
	                    		</div>
	                    	</div>    	
	                    </div>
	                </div>
	            </div>
	        </div>

        </div>
        <!-- container-fluid -->
@endsection