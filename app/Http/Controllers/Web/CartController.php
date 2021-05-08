<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct () 
    {
        $this->title = 'Cart';
        $this->route = 'web.cart.';
        $this->view  = 'web.cart.';
        $this->file_path = storage_path('app/public/products');
        $this->file_stored = '/public/products/';
        $this->file_path_view = \Request::root().'/storage/products/';
    }


    public function index()
    {
        if(Auth::guard('customer')->check()){
            $logged_id = Auth::guard('customer')->user()->id;
        }
        $data['route'] = $this->route;
        $data['file_path_view'] = $this->file_path_view;
        $data['items'] = \Cart::session($logged_id)->getContent();
        return view ($this->route.'index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if(Auth::guard('customer')->check()){
            $logged_id = Auth::guard('customer')->user()->id;
        }
       \Cart::session($logged_id)->update($product->id, [
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ]
       ]);
       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function addtocart(Product $product){

        if(Auth::guard('customer')->check()){
            $logged_id = Auth::guard('customer')->user()->id;
        }
                
        // add the product to cart
        \Cart::session($logged_id)->add(array(
            'id' => $product->id,
            'name' => $product->code,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return redirect()->back()->with('message', 'Item Added to Cart.')
        ->with('message-type', 'success');
    }

    public function removefromcart(Product $product){

        if(Auth::guard('customer')->check()){
            $logged_id = Auth::guard('customer')->user()->id;
        }
       // delete an item on cart
        \Cart::session($logged_id)->remove($product->id);
         return redirect()->back()->with('message', 'Item Removed from Cart.')
        ->with('message-type', 'danger');
    }


}
