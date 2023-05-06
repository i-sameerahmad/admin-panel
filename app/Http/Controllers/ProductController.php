<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use App\Models\Discount;
use App\Models\Inventory;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();
     //   dd($products);
       // echo $products[2]->inventory->quantity;
       return view('admin-pages.product-list', compact('products'));
        //   dd($products);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $categories = Category::all();
        // $colors = Color::all();
        // $sizes = Size::all();
        $coupans = Discount::all();

        return view('admin-pages.add-product');
        // , compact('categories', 'colors', 'sizes', 'coupans')
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
        $product = $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_status' => 'required',
            'product_price' => 'required',
            'category' => 'required',
            'quantity' => 'required',
            // 'product_image' => 'required',
        ]);
        // echo $request->file('product_image');
        if ($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $product['product_image'] = $file->getClientOriginalName();
            $file->move('uploads/', $file->getClientOriginalName());
        }
        //  dd($product);
        // $dir = Product::create($product);

        Product::create($product);
        // $size_id = 1;
        // $color_id = 1;
        // $quantity = $request->quantity;
        // $id = $dir->id;

        // $data = [
        //     'size_id' => $size_id,
        //     'color_id' => $color_id,
        //     'quantity' => $quantity,
        //     'product_id' => $id,
        // ];

        // $size_id = $request->size_id;
        // $color_id = $request->color_id;
        // $quantity = $request->quantity;
        // $id = $dir->id;

        // echo count($size_id);
        // for ($i=0; $i <count($quantity) ; $i++) {
        //     $data = [
        //         'size_id' => $size_id[$i],
        //         'color_id'=> $color_id[$i],
        //         'quantity'=> $quantity[$i],
        //         'product_id'=> $id,
        //     ];
        // Inventory::create($data);
        return redirect(route('admin.product-list'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('Category')->where('id', $id)->get();
        //  dd($product);


        return view('userside.user_pages.product-detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $categories = Category::all();
        // $colors = Color::all();
        // $sizes = Size::all();
        // $coupans = Discount::all();

        $product = Product::find($id);
        // $quantity = Inventory::where('product_id',$id)->get();
       // dd($quantity);
        return view('admin-pages.edit-product', compact('product'));
        // ,'quantity' ,'categories', 'colors', 'sizes', 'coupans'
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $found_product = Product::find($id);
        $product = $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_status' => 'required',
            'product_price' => 'required',
            'category' => 'required',
            'quantity' => 'required',
            // 'product_image' => 'required',
        ]);
        // if( $request->hasFile('product_image')){

        //     $file=$request->file('product_image');
        //     $product['product_image'] = $file->getClientOriginalName();
        //     $file->move('uploads',$file->getClientOriginalName());
        // }


        if ($request->hasfile('product_image')) {
            // delete old file from dir
            File::delete('uploads/' . $found_product->product_image);

            // put new file in dir
            $file = $request->file('product_image');
            $product['product_image'] = $file->getClientOriginalName();
            $file->move('uploads/', $product['product_image']);
        }


         $found_product->update($product);


        // $size_id = 1;
        // $color_id = 1;
        // $quantity = $request->quantity;
        // //   $id = $dir->id;

        // $data = [
        //     'size_id' => $size_id,
        //     'color_id' => $color_id,
        //     'quantity' => $quantity,
        //     'product_id' => $id,
        // ];
        // Inventory::where('product_id', $id)->update($data);
        return redirect(route('admin.product-list'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return redirect(route('admin.product-list'));

    }
}
