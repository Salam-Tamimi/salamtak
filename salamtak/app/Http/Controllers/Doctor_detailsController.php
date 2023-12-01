<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Doctor_detailsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:doctor']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->role === 'doctor') {
            // $doctor = Doctor::where('id', Auth::user()->doctor_id)->first();
            $doctor = Doctor::with('hospitals')->where('id', Auth::user()->doctor_id)->first();
            // dd($doctor);
            $department = Department::where('id', Auth::user()->department_id)->first();
            return view('doctor-details.index', compact('department', 'doctor'));
        } else {
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospitalId = auth()->user()->hospital_id;
        $departments = Department::where('hospital_id', $hospitalId)->get();
    
        return view('doctor-details.create', compact('departments'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        // Validate the incoming data
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string',
            'price' => 'required|integer',
            'experience' => 'required|string',
            'department_id' => 'required|exists:departments,id',
        ]);
    
        // Handle image upload (if provided)
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('doctor_images', 'public');
        }
    
        // Create a new doctor record
        $doctor= Doctor::create([
            'image' => $imagePath ?? null,
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'experience' => $request->input('experience'),
            'department_id' => $request->input('department_id'),
            'hospital_id'=> Auth::user()->hospital_id,
        ]);

        // Update the doctor_id of the currently logged-in user with the new doctor's ID
        User::where('id', $user->id)->update(['doctor_id' => $doctor->id]);

        return redirect()->route('doctor-details.index')->with('success', 'تمت إضافة المعلومات بنجاح');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
    
        // Add an authorization check here to ensure the authenticated user can edit this doctor
        // For example, you can check if the hospital_id of the doctor matches the hospital_id of the authenticated user.
    
        $hospitalId = auth()->user()->hospital_id;
        $departments = Department::where('hospital_id', $hospitalId)->get();
    
        return view('doctor-details.edit', compact('doctor', 'departments'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
    
        // Add an authorization check here to ensure the authenticated user can update this doctor
        // For example, you can check if the hospital_id of the doctor matches the hospital_id of the authenticated user.
    
        // Validate the incoming data
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string',
            'price' => 'required|integer',
            'experience' => 'required|string',
            'department_id' => 'required|exists:departments,id',
        ]);
    
        // Handle image upload (if provided)
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('doctor_images', 'public');
        }
    
        // Update the doctor's information
        $doctor->update([
            'image' => $imagePath ?? $doctor->image,
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'experience' => $request->input('experience'),
            'department_id' => $request->input('department_id'),
        ]);
    
        return redirect()->route('doctor-details.index')->with('success', 'Doctor updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
