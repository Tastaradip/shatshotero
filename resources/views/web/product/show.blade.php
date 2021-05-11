@extends('web.common.master')

@section('content')

        
        <!--single-protfolio-area are start-->
        <div class="single-protfolio-area ptb-70">
          <div class="container">
              <div class="row">
                    <div class="col-lg-7">
                       <div class="portfolio-thumbnil-area">
                        <div class="product-more-views">
                            <div class="tab_thumbnail" data-tabs="tabs">
                                <div class="thumbnail-carousel">
                                    <ul class="nav">
                                       <li>
                                        <a class="active" href="#view1" class="shadow-box" aria-controls="view1" data-toggle="tab"><img src="{{ $file_path_view.$product->featuredImage() }}" alt="" /></a></li>
                                        @if($product->galleryImages() != '')
                                        @php($id=2)
                                        @foreach($product->galleryImages() as $gallery_img)
                                       <li>
                                        <a href="#view{{$id++}}" class="shadow-box" aria-controls="view{{$id}}" data-toggle="tab"><img src="{{ $file_path_view.$gallery_img->url}}" alt="" /></a></li>
                                        @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content active-portfolio-area pos-rltv">
                            <div role="tabpanel" class="tab-pane active" id="view1">
                                <div class="product-img">
                                    <a class="fancybox" data-fancybox-group="group" href="{{ $file_path_view.$product->featuredImage() }}"><img src="{{ $file_path_view.$product->featuredImage() }}" alt="Single portfolio" /></a>
                                </div>
                            </div>
                            @if($product->galleryImages() != '')
                                @php($id=2)
                                @foreach($product->galleryImages() as $gallery_img)
                                    <div role="tabpanel" class="tab-pane" id="view{{$id++}}">
                                        <div class="product-img">
                                            <a class="fancybox" data-fancybox-group="group" href="{{ $file_path_view.$gallery_img->url}}"><img src="{{ $file_path_view.$gallery_img->url}}" alt="Single portfolio" /></a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                    <div class="col-lg-5">
                        <div class="single-product-description">
                           <div class="sp-top-des">
                                <h3>{{$product->code}}</h3>
                                @php($category = \App\Models\Category::find($product->category_id))
                                <h3>{{$product->title}} <span>({{$category->name}})</span></h3>
                                <div class="prodcut-ratting-price">
                                    <div class="prodcut-price">
                                        <div class="new-price"> {{$product->price}} tk</div>
                                        @if(!empty($product->prev_price))<div class="old-price"> <del>{{$product->prev_price}} tk</del> </div>@endif
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sp-des">
                                <p>{!! $product->description !!}</p>
                            </div>
                            <div class="sp-bottom-des">
                            <div class="single-product-option">
                                @if(!empty($product->colors))
                                <div class="sort product-type">
                                    <label>Color: </label>
                                    {{$product->colors}}
                                </div>
                                @endif
                                @if(!empty($product->sizes))
                                <div class="sort product-type">
                                    <label>Size: </label>
                                    {{$product->sizes}}
                                </div>
                                @endif
                                @if(!empty($product->type_id))
                                 @php($type = \App\Models\Type::find($product->type_id))
                                <div class="sort product-type">
                                    <label>Type: </label>
                                    {{$type->name}}
                                </div>
                                @endif
                            </div>
                            <div class="social-icon socile-icon-style-1">
                                <ul>
                                    <li><a href="{{route('web.cart.item.add', [$product->id])}}" data-tooltip="Add To Cart" class="add-cart add-cart-text" data-placement="left" tabindex="0">Add To Cart<i class="fa fa-cart-plus"></i></a></li>
                                </ul>
                            </div>
                      </div>
                  </div>
              </div>
          </div>  

           <div class="row" style="margin-top: 100px">
            @if(!empty($product->videos))
                    @foreach($product->videos as $video)           
                        <div class="col-md-2">
                           
                            <video width="100%" height="290" controls>
                                    <source src="{{$video_file_path_view.$video->url}}" type="video/mp4">
                            </video>

                         
                        </div>  
                    @endforeach 
                    @endif
            </div>

        </div>
        </div>
        <!--single-protfolio-area are start-->

       
        

        



@endsection