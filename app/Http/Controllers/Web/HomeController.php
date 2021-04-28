<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{

	public function __construct () 
    {
        $this->route = 'web.';
        $this->view  = 'web.';
        $this->file_path = storage_path('app/public/products');
        $this->file_stored = '/public/products/';
        $this->file_path_view = \Request::root().'/storage/products/';
    }

    public function index(){
        $data['products'] = Product::orderBy('id','ASC')->get();
        $data['file_path_view']       =  $this->file_path_view;
    	return view($this->view.'home', $data);
    }
}
