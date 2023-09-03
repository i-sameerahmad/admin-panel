<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;

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
    public function fetch($id) {
        $doc = Doctor::where('user_id', $id)->first();
        if ($doc) {
            $d = $doc->id;
            $apps = Appointment::where('status', 'done')->where('doc_id', $d)->get();
            return $apps;
        } else {
            // Handle the case when no doctor is found for the given user_id
            // For example, you can return an empty array or null
            return [];
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
public function getappointments(){
    $apps = Appointment::where('status', 'pending')->get();
    return $apps;
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
            'user_name' => 'required|string',
            'doctorId' => 'required|integer',

        ]);
        $appointment = new Appointment();
        $appointment->user_id = $validatedData['userId'];
        $appointment->user_name = $validatedData['user_name'];
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
    public function update($id)
    {
        $app = Appointment::find($id);
        $app->status = 'done';
        $app->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
