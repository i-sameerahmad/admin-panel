<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$orders=Booking::all();

// dd($pets);
        return view('admin-pages.booking', compact('orders'));
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
            'pet_id' => 'required',
            'user_id' => 'required',
            'price' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'paymentMethod' => 'required',
        ]);

        // Create an order
        $order = Booking::create([
            'price' => $request->input('price'),
            'pet_id' => $request->input('pet_id'), // You can calculate the total here
             // You can calculate the total here
            'user_id' => $request->input('user_id'),
            'name' => $request->input('name'), // Assuming you have authentication set up
            'email' => $request->input('email'), // Assuming you have authentication set up
            'phone' => $request->input('phone'), // Assuming you have authentication set up
            'address' => $request->input('address'), // Assuming you have authentication set up
            'paymentMethod' => $request->input('paymentMethod'), // Assuming you have authentication set up
             // Assuming you have authentication set up
        ]);



        return response()->json(['message' => 'Order placed successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
