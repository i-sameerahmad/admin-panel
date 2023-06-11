<?php

namespace App\Http\Controllers;


use App\Models\ManageAd;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pets = Pet::all();
// dd($pets);
        return view('admin-pages.manage-ads', compact('pets'));
    }
    public function approve($id)
    {
$pets =Pet::all();
        $pet = Pet::find($id);
        $pet->status = "approved";

        $pet->save();
        return redirect(route('admin.manage-ad'));
    }

    // public function list()
    // {
    //     $doctors=Doctor::all();
    //     return view('admin-pages.doctor-list', compact('doctors'));
    // }


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
     * @param  \App\Models\ManageAd  $manageAd
     * @return \Illuminate\Http\Response
     */
    public function show(ManageAd $manageAd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ManageAd  $manageAd
     * @return \Illuminate\Http\Response
     */
    public function edit(ManageAd $manageAd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ManageAd  $manageAd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ManageAd $manageAd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ManageAd  $manageAd
     * @return \Illuminate\Http\Response
     */
    public function destroy(ManageAd $manageAd)
    {
        //
    }
}
