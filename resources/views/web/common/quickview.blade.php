
        <!-- <div id="quickview-wrapper"> -->
            <!-- Modal -->
            <div class="modal modal-{{$product->id}} fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <div class="product-images">
                                    <!--modal tab start-->
                                    <div class="portfolio-thumbnil-area-2">
                                        <div class="tab-content active-portfolio-area-2">
                                            <div role="tabpanel" class="tab-pane active" id="view1">
                                                <div class="product-img">
                                                    <a href="#"><img src="{{ $file_path_view.$product->featuredImage() }}" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                            @if($product->galleryImages() != '')
                                        @php($id=2)
                                        @foreach($product->galleryImages() as $gallery_img)
                                            <div role="tabpanel" class="tab-pane" id="view{{$id++}}">
                                                <div class="product-img">
                                                    <a href="#"><img src="{{ $file_path_view.$gallery_img->url }}" alt="Single portfolio" /></a>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                        </div>
                                        <div class="product-more-views-2">
                                            <div class="thumbnail-carousel-modal-2" data-tabs="tabs">
                                                @if($product->galleryImages() != '')
                                                @php($id=2)
                                                @foreach($product->galleryImages() as $gallery_img)
                                                <a href="#view{{$id++}}" aria-controls="#view{{$id}}" data-toggle="tab"><img src="{{ $file_path_view.$gallery_img->url }}" alt="" /></a>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--modal tab end-->
                                <!-- .product-images -->
                                <div class="product-info">
                                        <h1>{{$product->code}} - {{$product->title}} </h1>
                                        <div class="price-box-3">
                                            <div class="s-price-box"> <span class="new-price">{{$product->price}} tk</span> @if(!empty($product->prev_price))<span class="old-price">{{$product->prev_price}} tk</span> @endif</div>
                                        </div>
                                        <div class="quick-add-to-cart">
                                                <a href="{{route('web.cart.item.add', [$product->id])}}" type="button" class="single_add_to_cart_button">Add to cart</a>
                                        </div>
                                        <div class="quick-desc"> {!! $product->description !!} </div>
                                </div>
                                <!-- .product-info -->
                            </div>
                            <!-- .modal-product -->
                        </div>
                        <!-- .modal-body -->
                    </div>
                    <!-- .modal-content -->
                </div>
                <!-- .modal-dialog -->
            </div>
            <!-- END Modal -->
        <!-- </div> -->