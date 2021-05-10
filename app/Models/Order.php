<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $fillable = ['customer_id', 'phone', 'address', 'district', 'zipcode', 'country', 'status', 'price', 'quantity'];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    public function products(){
    	return $this->belongsToMany('App\Models\Product', 'order_products', 'order_id', 'product_id');
    }

    public static function getQtyById($order_id, $product_id)
	{
	   $row = DB::table('order_products')->where('order_id', $order_id)->where('product_id', $product_id)->get();
	   $qty = $row[0]->quantity;
	   if(!empty($row)){
	   	return $qty;
	   }
	   else{
	   	return '';
	   }
	}

}
