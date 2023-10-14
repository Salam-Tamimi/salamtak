<?php

namespace App\Http\Controllers;

use App\Models\Doctor_schaduale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorSchadualeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role === 'doctor') {
            $schedules = Doctor_schaduale::where('doctor_id', Auth::user()->id)->get();
            return view('doctor-schaduale.index', compact('schedules'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->role === 'doctor') {
            // dd('2');
            return redirect()->route('doctor-schaduale.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->role === 'doctor') {
            $data = $request->validate([
                'day_of_week' => 'required',
                'start_time' => 'required',
                'end_time' => 'required',
            ]);

            $data['doctor_id'] = Auth::user()->id;

            Doctor_schaduale::create($data);

            return redirect()->route('doctor-schaduale.index')->with('success', 'Doctor schedule created successfully.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor_schaduale  $doctor_schaduale
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // if (Auth::user()->role === 'doctor') {
        //     $schedule = Doctor_schaduale::findOrFail($id);
        //     return view('doctor-schaduale.show', compact('schedule'));
        // } else {
        //     return redirect()->back()->with('error', 'You do not have permission to access this page.');
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor_schaduale  $doctor_schaduale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->role === 'doctor') {
            $schedule = Doctor_schaduale::findOrFail($id);
            return view('doctor-schaduale.edit', compact('schedule'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor_schaduale  $doctor_schaduale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->role === 'doctor') {
            $data = $request->validate([
                'day_of_week' => 'required',
                'start_time' => 'required',
                'end_time' => 'required',
            ]);

            $schedule = Doctor_schaduale::findOrFail($id);
            $schedule->update($data);

            return redirect()->route('doctor-schaduale.index')->with('success', 'Doctor schedule updated successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor_schaduale  $doctor_schaduale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->role === 'doctor') {
            $schedule = Doctor_schaduale::findOrFail($id);
            $schedule->delete();

            return redirect()->route('doctor-schaduale.index')->with('success', 'Doctor schedule deleted successfully.');
        }
    }
}
