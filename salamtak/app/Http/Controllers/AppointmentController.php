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

    public function index()
    {
        $role = auth()->user()->role; 
        $doctor_id = auth()->user()->doctor_id;
    
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

    $validatedData = $request->validate([
        'day' => 'required',
        'start_time' => 'required',
    ]);

    $doctor_id = $request->route('doctor_id');

    $doctor = Doctor::with('hospitals')->find($doctor_id);

    list($startTimeString, $endTimeString) = explode(' - ', $validatedData['start_time']);

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

    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id);
        $bookedTimes = Appointment::all()
        ->pluck('start_time', 'day_of_week')
        ->toArray();
        $doctor_id=$appointment->doctor_id;
        $schedules = DB::table('doctor_schaduales')->where('doctor_id', $doctor_id)->get();
// dd($bookedTimes);
// dd($appointment);
// dd($schedules);
        return view('pages.appointments.edit', compact('appointment','bookedTimes','schedules'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'day' => 'required',
            'start_time' => 'required',
        ]);
    
        // Get the appointment to be updated
        $appointment = Appointment::findOrFail($id);
    
        // Extract start time from the range
        list($startTimeString, $endTimeString) = explode(' - ', $validatedData['start_time']);
    
        // Create DateTime objects for start and end times
        $startTime = new \DateTime($startTimeString);
        $endTime = new \DateTime($endTimeString);
    
        // Update the appointment with the new data
        $appointment->day_of_week = $request->input('day');
        $appointment->start_time = $startTime->format('H:i:s');
        $appointment->end_time = $endTime->format('H:i:s');
        
        if ($appointment->save()) {
            $bookedTimes = Appointment::where('day_of_week', $request->input('day'))
                ->pluck('start_time')
                ->toArray();
    // dd($bookedTimes);
            return view('pages.success', compact('bookedTimes', 'appointment'))->with('success', 'Appointment created successfully!');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to save the appointment.');
        }
}

public function searchAppointment(Request $request, $departmentId)
{
    if ($request->search) {
        $searchAppointment = User::whereHas('doctors', function ($query) use ($departmentId) {
            $query->where('department_id', $departmentId);
        })
        ->where('name', 'like', '%' . $request->search . '%')
        ->with(['doctors.appointments.review'])
        ->latest()
        ->paginate(3);

        if ($searchAppointment->isEmpty()) {
            // Handle case where no data is found.
        } else {
            return view('pages.search', [
                'departmentId' => $departmentId,
                'searchAppointment' => $searchAppointment,
            ]);
        }
    } else {
        // Handle empty search case.
        return redirect()->back();
    }
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id);
    
        $appointment->delete();
    return back()->with('success', 'Appointment deleted successfully');
    }
}