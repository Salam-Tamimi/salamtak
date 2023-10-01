<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $appointments=Appointment::all();
       return view('admin.pages.appointments-admin.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.appointments-admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validate the request data
           $validatedData = $request->validate([
            'date' => 'required',
            'time' => 'required',
            'hospital_id' => 'required',
            'department_id' => 'required',
            'doctor_id' => 'required',
        ]);

        // Create a new appointment with the validated data
        Appointment::create($validatedData);

        // Redirect to the index page with a success message
        return view('admin.pages.appointments-admin.index')->with('success', 'Appointment created successfully');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        return view('admin.pages.appointments-admin.edit', compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
          // Validate the request data
    $validatedData = $request->validate([
        'date' => 'required',
        'time' => 'required',
        'hospital_id' => 'required',
        'department_id' => 'required',
        'doctor_id' => 'required',
    ]);

    // Update the appointment with the validated data
    $appointment->update($validatedData);

    // Redirect back to the index page with a success message
    return redirect()->route('admin.pages.appointments-admin.index')->with('success', 'Appointment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
    // Delete the appointment
    $appointment->delete();

    // Redirect back to the index page with a success message
    return redirect()->route('admin.pages.appointments-admin.index')->with('success', 'Appointment deleted successfully');
    }
}
