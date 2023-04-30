<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupans = Discount::all();
        return view('admin-pages.coupan-list',compact('coupans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-pages.add-coupan');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'discount_name' => 'required',
            'discount_description' => 'required',
            'discount_percentage' => 'required',
            'status' => 'required'

        ]);

        // if( $request->hasFile('image')){
        //     $file=$request->file('image');
            
        //     $data['image'] = $file->getClientOriginalName();
        //     $file->move('uploads',$file->getClientOriginalName());
        // }
        Discount::create($data);
        return redirect(url('coupan-list'));
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupan = Discount::find($id);
        return view('admin-pages.coupan-edit',compact('coupan'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $coupan = Discount::find($id);
        $data = $request->validate([
            'discount_name' => 'required',
            'discount_description' => 'required',
            'discount_percentage' => 'required',
            'status' => 'required'

        ]);
        $coupan->update($data);
        return redirect(url('coupan-list'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discount  $discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discount $discount)
    {
        //
    }
}
