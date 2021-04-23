<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

	public function __construct () 
    {
        $this->route = 'web.';
        $this->view  = 'web.';
    }

    public function index(){
    	return view($this->view.'home');
    }
}
