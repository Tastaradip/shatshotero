<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Toastr;

class OrderController extends Controller
{
    public function __construct () 
    {
        $this->title = 'Orders';
        $this->route = 'admin.orders.';
        $this->view  = 'admin.order.';
        $this->file_path_view = \Request::root().'/storage/products/';
    }


    public function index()
    {
        $data['title']     = $this->title;
        $data['route']     = $this->route;

        $data['orders'] = Order::orderBy('id','DESC')->get();
        return view($this->view.'index', $data);
    }

    public function show(Order $order)
    {
    	$data['title']     = $this->title;
        $data['route']     = $this->route;
        $data['file_path_view'] = $this->file_path_view;
        $data['order'] = $order;
    	$data['customer'] = \App\Models\Customer::find($order->customer_id);
    	$data['ordered_products'] = $order->products;


        return view($this->view.'show', $data);
    }

    public function update(Order $order)
    {
    	$order->update([
    		'status' => 'completed'
    	]);

        Toastr::success('The order is completed :)','Success');
        return redirect()->route($this->route.'index');
    }

}
