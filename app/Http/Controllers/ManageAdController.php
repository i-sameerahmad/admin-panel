<?php

namespace App\Http\Controllers;

use App\Models\ManageAd;
use Illuminate\Http\Request;

class ManageAdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-pages.manage-ads');
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
