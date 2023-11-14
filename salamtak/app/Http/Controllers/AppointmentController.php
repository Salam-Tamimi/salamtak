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
    //    $doctors=Doctor::all();
    $departments = Department::all();
     // Retrieve all departments and their associated doctors
    $departments = Department::with('doctors')->get();

    // Prepare the data for the JavaScript object
    $departmentDoctorMap = [];
    foreach ($departments as $department) {
        $departmentDoctorMap[$department->id] = $department->doctors;
    }
        return view('admin.pages.appointments-admin.create', compact('departments', 'departmentDoctorMap'));
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
            'day_of_week' => 'required',
            'time' => 'required',
            'doctor_id' => 'required',  // Assuming you have a select for doctors in your form
            'payment_id' => 'required',
            'review_id' => 'required',
        ]);

        // Fetch the related doctor record
        $doctor = Doctor::findOrFail($validatedData['doctor_id']);

        // Fill in the related data from the doctor record
        $validatedData['department_id'] = $doctor->department_id;
        $validatedData['hospital_id'] = $doctor->hospital_id;

        // Create the appointment
        Appointment::create($validatedData);

        return redirect()->route('appointments.index');
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
