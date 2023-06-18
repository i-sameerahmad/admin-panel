<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;

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
            'productIds' => 'required',
            'quantities' => 'required',
            'userId' => 'required',
            'total' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'paymentMethod' => 'required',
        ]);

        // Create an order
        $order = Order::create([
            'total' => $request->input('total'), // You can calculate the total here
            'user_id' => $request->input('userId'),
            'name' => $request->input('name'), // Assuming you have authentication set up
            'email' => $request->input('email'), // Assuming you have authentication set up
            'phone' => $request->input('phone'), // Assuming you have authentication set up
            'address' => $request->input('address'), // Assuming you have authentication set up
            'paymentMethod' => $request->input('paymentMethod'), // Assuming you have authentication set up
             // Assuming you have authentication set up
        ]);
        // Get the product ids and quantities
        $productIds = explode(',', $request->input('productIds'));
        $quantities = explode(',', $request->input('quantities'));

        // Create order items
        foreach ($productIds as $index => $productId) {
            OrderItems::create([
                'quantity' => $quantities[$index],
                'order_id' => $order->id,
                'product_id' => $productId,
            ]);
        }

        return response()->json(['message' => 'Order placed successfully']);
    }




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
}
