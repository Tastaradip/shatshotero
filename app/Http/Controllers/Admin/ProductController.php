<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
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
    }

    public function index()
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;

        $data['products'] = Product::orderBy('id','ASC')->get();
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
                'image' => 'required'
            ]);
        $input = $request->only(['category_id', 'type_id', 'code', 'title', 'description', 'sizes', 'colors', 'price', 'prev_price', 'stock', 'featured', 'status']);
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function images(){
        return view($this->view.'images');
    }

    public function images_store(){
        //
    }
}
