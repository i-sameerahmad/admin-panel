<?php

namespace App\Http\Controllers;

use App\Models\AdoptPet;
use Illuminate\Http\Request;

class AdoptPetController extends Controller
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

    public function getadoptPets(){
        $products=AdoptPet::all();
        return $products;
    }

    public function getadoptpet($id){
        $product = AdoptPet::where('id', $id)->get();
        return $product;
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'gender' => 'required|string',
            'category' => 'required|string',
            'age' => 'required|integer',
            'user_id' => 'required|numeric',
            'image' => 'nullable|image|max:2048',
        ]);
        $pet = new AdoptPet();
        $pet->title = $validatedData['title'];
        $pet->description = $validatedData['description'];
        $pet->gender = $validatedData['gender'];
        $pet->category = $validatedData['category'];
        $pet->age = $validatedData['age'];
        $pet->user_id = $validatedData['user_id'];

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $image->storeAs('images/', $filename);
        //     $pet->image = $filename;
        // }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $pet['image'] = $image->getClientOriginalName();
            $image->move('images/', $image->getClientOriginalName());
        }

        $pet->save();

        return response()->json([
            'data' => $pet,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdoptPet  $adoptPet
     * @return \Illuminate\Http\Response
     */
    public function show(AdoptPet $adoptPet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdoptPet  $adoptPet
     * @return \Illuminate\Http\Response
     */
    public function edit(AdoptPet $adoptPet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdoptPet  $adoptPet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdoptPet $adoptPet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdoptPet  $adoptPet
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdoptPet $adoptPet)
    {
        //
    }
}
