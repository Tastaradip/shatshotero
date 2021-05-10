<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
                'customer_id' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'district' => 'required',
                'country' => 'required',
            ]);
        $input = $request->only(['customer_id', 'phone', 'address', 'district', 'zipcode', 'country', 'status', 'price', 'quantity']);
        $order = Order::create($input); 

        $cartItems = \Cart::session(Auth::guard('customer')->user()->id)->getContent();
        foreach($cartItems as $item){
            $order->products()->attach($item->id, ['price'=> $item->price, 'quantity'=> $item->quantity]);
        }

        //empty cart
        \Cart::session(Auth::guard('customer')->user()->id)->clear();

        return redirect()->back()->with('message', 'Your Order has been submitted successfully. Thank you for your Order.')
        ->with('message-type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function checkout(){
        return view ('web.order.checkout');
    }
}
