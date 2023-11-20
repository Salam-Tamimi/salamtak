<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Doctor_schaduale;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //    $appointments=Appointment::all();
    //    return view('pages.appointments.index', compact('appointments'));
    // }
    public function index()
    {
        // Assuming you have access to the role and doctor_id in your user object or through some other means
        $role = auth()->user()->role; // Assuming you have role information in the user object
        $doctor_id = auth()->user()->doctor_id; // Assuming you have doctor_id information in the user object
    
        if ($role === 'user') {
            $appointments = Appointment::all();
            return view('pages.appointments.index', compact('appointments'));
        } elseif ($role === 'doctor') {
            $appointments = Appointment::where('doctor_id', $doctor_id)->get();
            return view('doctor-appointments.index', compact('appointments'));
        }

        // If none of the conditions match, you can return an error view or redirect
        return view('404.blade.php');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($doctor_id)
    {
    
    // $departments = Department::all();
    //  // Retrieve all departments and their associated doctors
    // $departments = Department::with('doctors')->get();

    // // Prepare the data for the JavaScript object
    // $departmentDoctorMap = [];
    // foreach ($departments as $department) {
    //     $departmentDoctorMap[$department->id] = $department->doctors;
    // }
    //     return view('admin.pages.appointments-admin.create', compact('departments', 'departmentDoctorMap'));
    $bookedTimes = Appointment::all()
    // ->pluck('start_time','day_of_week')
    ->toArray();
    // dd($bookedTimes);
    $schedules = DB::table('doctor_schaduales')->where('doctor_id', $doctor_id)->get();
    return view('pages.appointments.create', compact('schedules', 'doctor_id','bookedTimes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'day_of_week' => 'required',
        //     'time' => 'required',
        //     'doctor_id' => 'required',  
        //     'payment_id' => 'required',
        //     'review_id' => 'required',
        // ]);

        // // Fetch the related doctor record
        // $doctor = Doctor::findOrFail($validatedData['doctor_id']);

        // // Fill in the related data from the doctor record
        // $validatedData['department_id'] = $doctor->department_id;
        // $validatedData['hospital_id'] = $doctor->hospital_id;

        // // Create the appointment
        // Appointment::create($validatedData);

        // Validate the request data
        // Fetch already booked times
         // Fetch the booked times after saving the appointment
    // Validate the request data
    $validatedData = $request->validate([
        'day' => 'required',
        'start_time' => 'required',
    ]);

    // Get the doctor_id from the route parameters
    $doctor_id = $request->route('doctor_id');

    // Get the related doctor with hospital information
    $doctor = Doctor::with('hospitals')->find($doctor_id);

    // Extract start time from the range
    list($startTimeString, $endTimeString) = explode(' - ', $validatedData['start_time']);

    // Create DateTime objects for start and end times
    $startTime = new \DateTime($startTimeString);
    $endTime = new \DateTime($endTimeString);

    // Create a new appointment instance with the required fields
    $appointment = new Appointment([
        'day_of_week' => $request->input('day'),
        'start_time' => $startTime->format('H:i:s'),
        'end_time' => $endTime->format('H:i:s'),
        'doctor_id' => $doctor_id,
        'hospital_id' => $doctor->hospitals->id,
        'department_id' => $doctor->department_id,
        'user_id' => Auth::user()->id,
        'status' => Auth::user()->role === 'doctor' ? true : false, // Set status based on the role
    ]);

    // Save the appointment only if the validation passes
    if ($appointment->save()) {
        // Retrieve booked times after saving the appointment
        $bookedTimes = Appointment::where('day_of_week', $request->input('day'))
            ->pluck('start_time')
            ->toArray();
// dd($bookedTimes);
        return view('pages.success', compact('bookedTimes', 'appointment'))->with('success', 'Appointment created successfully!');
    } else {
        // Handle the case where the appointment failed to save
        return redirect()->back()->withInput()->with('error', 'Failed to save the appointment.');
    }
}

public function updateStatus($appointmentId)
{
    // Find the appointment by ID
    $appointment = Appointment::findOrFail($appointmentId);

    // Update the status
    $appointment->status = true;
    $appointment->save();

    return response()->json(['message' => 'Appointment status updated successfully']);
}
// public function getBookedTimes(Request $request)
// {
//     try {
//         $day = $request->input('day');

//         // Fetch already booked times
//         $bookedTimes = Appointment::where('day_of_week', $day)
//             ->pluck('start_time')
//             ->toArray();
// dd($bookedTimes);
//         return response()->json(['bookedTimes' => $bookedTimes]);
//     } catch (\Exception $e) {
//         return response()->json(['error' => $e->getMessage()], 500);
//     }
// }
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