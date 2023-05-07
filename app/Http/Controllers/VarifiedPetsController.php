<?php

namespace App\Http\Controllers;

use App\Models\varifiedPets;
use Illuminate\Http\Request;

class VarifiedPetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = varifiedPets::all();
     //   dd($products);
       // echo $products[2]->inventory->quantity;
       return view('admin-pages.add-verified-pet');
        //   dd($products);

    }

    public function list()
    {
         $pets = varifiedPets::all();
     //   dd($products);
       // echo $products[2]->inventory->quantity;
       return view('admin-pages.pets-list',compact('pets'));
        //   dd($products);

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

            //  dd($request->all());
        //
        $pet = $request->validate([
            'vpet_name' => 'required',
            'vpet_description' => 'required',
            'vpet_price' => 'required',
            'vpet_category' => 'required',
            // 'product_image' => 'required',
        ]);
        // echo $request->file('product_image');
        if ($request->hasFile('vpet_image')) {
            $file = $request->file('vpet_image');
            $pet['vpet_image'] = $file->getClientOriginalName();
            $file->move('uploads/', $file->getClientOriginalName());
        }
        varifiedPets::create($pet);
        return redirect(route('admin.pets-list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\varifiedPets  $varifiedPets
     * @return \Illuminate\Http\Response
     */
    public function show(varifiedPets $varifiedPets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\varifiedPets  $varifiedPets
     * @return \Illuminate\Http\Response
     */
    public function edit(varifiedPets $varifiedPets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\varifiedPets  $varifiedPets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, varifiedPets $varifiedPets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\varifiedPets  $varifiedPets
     * @return \Illuminate\Http\Response
     */
    public function destroy(varifiedPets $varifiedPets)
    {
        //
    }
}
