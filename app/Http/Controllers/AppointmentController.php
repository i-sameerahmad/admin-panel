<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validatedData = $request->validate([
            'description' => 'required|string',
            'date' => 'required|string',
            'userId' => 'required|string',
            'doctorId' => 'required|integer',

        ]);
        $appointment = new Appointment();
        $appointment->user_id = $validatedData['userId'];
        $appointment->doc_id = $validatedData['doctorId'];
        $appointment->description = $validatedData['description'];
        $appointment->date = $validatedData['date'];


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $appointment['image'] = $image->getClientOriginalName();
            $image->move('images/', $image->getClientOriginalName());
        }
        $appointment->save();

        return response()->json([
            'data' => $appointment,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
