<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use App\Models\Discount;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\Doctor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('admin-pages.add-doctor');
    }
    public function getDoctors()
    {
$doctors=Doctor::all();
return response()->json([
    'data' => $doctors,
]);
    }
    public function list()
    {
    //     $categories = Category::all();
    //     $colors = Color::all();
    //     $sizes = Size::all();
    //     $coupans = Discount::all();
$doctors=Doctor::all();
    //     // $product = Product::find($id);
    //     // $quantity = Inventory::where('product_id',$id)->get();
    //    // dd($quantity);
    //     return view('admin-pages.doctor-list', compact('product','quantity' ,'categories', 'colors', 'sizes', 'coupans'));
         return view('admin-pages.doctor-list', compact('doctors'));
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
        // dd($request->all());
        $doctor = $request->validate([
            'doc_name' => 'required',
            'doc_description' => 'required',
            'doc_phone' => 'required|min:8|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'doc_email' => 'required',
            'doc_address' => 'required',
            'doc_status' => 'required',
// 'doc_image'=>'required',
        ]);

        if ($request->hasFile('doc_image')) {
            $file = $request->file('doc_image');
            $doctor['doc_image'] = $file->getClientOriginalName();
            $file->move('uploads/', $file->getClientOriginalName());
        }

        Doctor::create($doctor);

        return redirect(route('admin.doctor-list'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $doctor = Doctor::find($id);
        // $quantity = Inventory::where('product_id',$id)->get();
       // dd($quantity);
        return view('admin-pages.edit-doctor', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $found_doctor = Doctor::find($id);
        $doctor = $request->validate([
            'doc_name' => 'required',
            'doc_description' => 'required',
            'doc_phone' => 'required|min:8|max:11|regex:/^([0-9\s\-\+\(\)]*)$/',
            'doc_email' => 'required',
            'doc_address' => 'required',
            'doc_status' => 'required',
            // 'product_image' => 'required',
        ]);

        if ($request->hasfile('doc_image')) {
            // delete old file from dir
            File::delete('uploads/' . $found_doctor->doc_image);

            // put new file in dir
            $file = $request->file('doc_image');
            $doctor['doc_image'] = $file->getClientOriginalName();
            $file->move('uploads/', $doctor['doc_image']);
        }


         $found_doctor->update($doctor);
        return redirect(route('admin.doctor-list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor=Doctor::find($id);
        $doctor->delete();
        return redirect(route('admin.doctor-list'));

    }
}
