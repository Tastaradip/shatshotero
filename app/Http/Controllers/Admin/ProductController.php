<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Video;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Toastr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct () 
    {
        $this->title = 'Products';
        $this->route = 'admin.products.';
        $this->view  = 'admin.product.';
        $this->file_path = storage_path('app/public/products');
        $this->file_stored = '/public/products/';
        $this->file_path_view = \Request::root().'/storage/products/';
        $this->video_file_path = storage_path('app/public/videos');
        $this->video_file_stored = '/public/videos/';
        $this->video_file_path_view = \Request::root().'/storage/videos/';
    }

    public function index()
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;

        $data['products'] = Product::orderBy('id','ASC')->get();
        $data['file_path_view']       =  $this->file_path_view;
        return view($this->view.'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;

        $data['categories']  = Category::orderBy('id','ASC')->get();
        $data['types'] = Type::orderBy('id','ASC')->get(); 
        return view($this->view.'create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $request->validate([
                'category_id' => 'required',
                'code' => 'required | string | unique:products,id',
                'price' => 'required',
                'stock' => 'required',
            ]);
        $input = $request->only(['category_id', 'type_id', 'code', 'title', 'price', 'stock', 'colors', 'sizes', 'featured', 'status']);
        $product = Product::create($input);  

        if($request->hasFile('image'))
            {
                $uploadedFile = $request->file('image');
                $imageName = Str::slug($product->code,'-').'_'.Carbon::now()->format('ddmmYhis').'.'.$uploadedFile->extension();
                if (!is_dir($this->file_path)) 
                {
                    mkdir($this->file_path, 0777);
                }
                $uploadedFile->storeAs($this->file_stored, $imageName);
                $url = $imageName;

                $imageUpload = new Image([
                    'url' => $url,
                    'type'=> 'featured',
                ]);

                $product->images()->save($imageUpload);  
            }  

        Toastr::success('Product added successfully :)','Success');
        return redirect()->route($this->route.'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['file_path_view']       =  $this->file_path_view;

        $data['product']   = $product;
        return view($this->view.'show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['file_path_view']       =  $this->file_path_view;

        $data['product']   = $product;
        $data['categories']  = Category::orderBy('id','ASC')->get();
        $data['types'] = Type::orderBy('id','ASC')->get(); 
        return view($this->view.'edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
                'category_id' => 'required',
                'code' => 'required | string | unique:products,id',
                'price' => 'required',
                'stock' => 'required',
            ]);
        
        $input = $request->only(['category_id', 'type_id', 'code', 'title', 'price', 'stock', 'colors', 'sizes', 'featured', 'status', 'discount', 'sold']);
        if($request->price != $product->price){
            $old_price = $product->price;
            $input = $input + ['prev_price'=>$old_price];
        }
        
        $product->update($input);  

        if($request->hasFile('image'))
            {
                if(Storage::exists($this->file_stored.$product->featuredImage())){
                    Storage::delete($this->file_stored.$product->featuredImage()) ;
                }
                $uploadedFile = $request->file('image');
                $imageName = Str::slug($product->code,'-').'_'.Carbon::now()->format('ddmmYhis').'.'.$uploadedFile->extension();
                if (!is_dir($this->file_path)) 
                {
                    mkdir($this->file_path, 0777);
                }
                $uploadedFile->storeAs($this->file_stored, $imageName);
                $product_image = $product->images->where('type', 'featured')->first() ;
                $url = $imageName;

                $product_image->update([
                    'url' => $url,
                ]);

                $product->images()->save($product_image);  
            }  

        Toastr::success('Product updated successfully :)','Success');
        return redirect()->route($this->route.'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if(Storage::exists($this->file_stored.$product->featuredImage())){
            Storage::delete($this->file_stored.$product->featuredImage()) ;
        }
        $product->delete();

        Toastr::success('Product deleted successfully :)','Success');
        return redirect()->back();
    }


    public function images($id){
        $data['product'] = Product::findOrFail($id);
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['file_path_view']       =  $this->file_path_view;
        return view($this->view.'images', $data);
    }


    public function images_store($id, Request $request){

        $product = Product::findOrFail($id);
        if($request->hasFile('file'))
            {
                $uploadedFile = $request->file('file');
                //$imageName = Str::slug($property->title,'-').'_'.Carbon::now()->format('ddmmYhis').'.'.$uploadedFile->extension();
                $imageName = $uploadedFile->getClientOriginalName();
                if (!is_dir($this->file_path)) 
                {
                    mkdir($this->file_path, 0777);
                }
                $uploadedFile->storeAs($this->file_stored, $imageName);
                $url = $imageName;

                $imageUpload = new Image([
                    'url' => $url,
                    'type'=> 'gallery',
                ]);

                $product->images()->save($imageUpload);  
                return response()->json(['success'=>$imageName]);  
            }    
    }

    public function images_destroy($id, Request $request)
    {
            $image = Image::where('id',$id)->first();
            if(Storage::exists($this->file_stored.$image->url)){
                Storage::delete($this->file_stored.$image->url) ;
            }
            Image::find($id)->delete();
            return response()->json([
                'success' =>  true
            ]);
    }

    public function videos($id){
        $data['product'] = Product::findOrFail($id);
        $data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['video_file_path_view']       =  $this->video_file_path_view;
        return view($this->view.'videos', $data);
    }

    public function videos_store($id, Request $request){

        $product = Product::findOrFail($id);
        if($request->hasFile('file'))
            {
                $request->validate([
                    'file' => 'required',
                ]);
                $uploadedFile = $request->file('file');
                $videoName = Str::slug($product->code,'-').'_'.Carbon::now()->format('ddmmYhis').'.'.$uploadedFile->extension();

                if (!is_dir($this->video_file_path)) 
                {
                    mkdir($this->video_file_path, 0777);
                }
                $uploadedFile->storeAs($this->video_file_stored, $videoName);
                $url = $videoName;

                $videoUpload = new Video([
                    'url' => $url,
                    'type'=> '1',
                ]);

                $product->videos()->save($videoUpload);  
                Toastr::success('Video added successfully :)','Success');
                
            }   
            return redirect()->back(); 
    }

    public function videos_destroy($id)
    {
            $video = Video::where('id',$id)->first();
            if(Storage::exists($this->video_file_stored.$video->url)){
                Storage::delete($this->video_file_stored.$video->url) ;
            }
            Video::find($id)->delete();
            Toastr::success('Video deleted successfully :)','Success');
            return redirect()->back(); 
    }
    
}
