<?php

namespace App\Http\Controllers;

use App\Models\DoctorReview;
use Illuminate\Http\Request;

class DoctorReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function list($id){
        $reviews=DoctorReview::where('doctorId', $id)->get();
        return $reviews;
        }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $DoctorReview = $request->validate([
            'userId' => 'required',
            'userName' => 'required',
            'review' => 'required',
            'rating' => 'required',
            'doctorId' => 'required',
        ]);

        DoctorReview::create($DoctorReview);

        return response()->json([
            'data' => $DoctorReview,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DoctorReview $doctorReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DoctorReview $doctorReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DoctorReview $doctorReview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DoctorReview $doctorReview)
    {
        //
    }
}
