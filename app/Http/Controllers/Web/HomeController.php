<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{

	public function __construct () 
    {
        $this->route = 'web.';
        $this->view  = 'web.';
        $this->file_path_view = \Request::root().'/storage/products/';
        $this->slider_file_path_view = \Request::root().'/storage/sliders/';
    }

    public function index(){
        $data['products'] = Product::where('stock','!=','0')->orderBy('id','DESC')->take(8)->get();
        $data['featured_products'] = Product::where('stock','!=','0')->where('featured','1')->orderBy('id','DESC')->take(6)->get();
        $data['discount_products'] = Product::where('stock','!=','0')->where('discount','1')->orderBy('id','DESC')->take(6)->get();
        $data['best_seller_products'] = Product::where('stock','!=','0')->where('sold','>','0')->orderBy('sold','DESC')->take(8)->get();
        $data['sliders'] = Slider::where('status','1')->orderBy('id','DESC')->get();
        $data['file_path_view'] =  $this->file_path_view;
        $data['slider_file_path_view'] =  $this->slider_file_path_view;
    	return view($this->view.'home', $data);
    }

    public function about(){
        return view($this->view.'page.about');
    }


}
