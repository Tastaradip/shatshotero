<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct () 
    {
        $this->title = 'Product';
        $this->route = 'web.products.';
        $this->view  = 'web.product.';
    }

    public function show($id)
    {
        $data['product'] = Product::findOrFail($id);
        
        return view ($this->view.'.show', $data);
    }

}
