<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function __construct () 
    {
        $this->title = 'Product';
        $this->route = 'web.products.';
        $this->view  = 'web.product.';
        $this->file_path = storage_path('app/public/products');
        $this->file_stored = '/public/products/';
        $this->file_path_view = \Request::root().'/storage/products/';
        $this->video_file_path_view = \Request::root().'/storage/videos/';
    }

    public function show($id)
    {
        $data['product'] = Product::findOrFail($id);      
        $data['file_path_view'] =  $this->file_path_view;
        $data['video_file_path_view'] =  $this->video_file_path_view;
        return view ($this->view.'.show', $data);
    }

}
