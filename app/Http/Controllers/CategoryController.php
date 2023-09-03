<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard(){
        $data = Order::all();
$numOrders = count($data); // Get the number of orders

$totalSum = 0; // Initialize the sum variable

foreach ($data as $order) {
    $totalSum += $order->total; // Add the "total" attribute of each order to the sum
}
// dd($numOrders);
// dd($totalSum);
        return view('admin-pages.index',compact('numOrders','totalSum'));

            }
    public function index()
    {
        $categories = Category::all();

        return view('admin-pages.category-list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-pages.add-category');
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
            'category_name' => 'required',
            'category_description' => 'required'
        ]);

        // if( $request->hasFile('image')){
        //     $file=$request->file('image');

        //     $data['image'] = $file->getClientOriginalName();
        //     $file->move('uploads',$file->getClientOriginalName());
        // }
        Category::create($data);
        return redirect(route('admin.view-category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= Category::find($id);
        return view('admin-pages.category-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $data = $request->validate([
            'category_name' => 'required',
            'category_description' => 'required'
        ]);

        $category->update($data);
        return redirect(route('admin.view-category'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
