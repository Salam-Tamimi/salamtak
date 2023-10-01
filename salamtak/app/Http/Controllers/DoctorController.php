<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors=Doctor::all();
        return view('admin.pages.doctors-list.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        return view('admin.pages.doctors-list.create', ['departments' => $departments]);
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
            'name' => 'required',
            'image' => 'required',
            'price' => 'required', 
            'experience' => 'required', 
            'depatment_id' => 'required', 
        ]);

        Doctor::create($validatedData);

        return  redirect()->route('doctors-list.index')->with('success', 'تمت عملية الإنشاء بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('admin.pages.doctors-list.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          // Validate the request data
          $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'price' => 'required', 
            'experience' => 'required', 
            'depatment_id' => 'required', 
        ]);

        $doctor = Doctor::findOrFail($id);

        $doctor->update($validatedData);

        return redirect()->route('doctors-list.index')->with('success', 'تمت عملية التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Doctor::destroy($id);
        return back()->with('success', 'تمت عملية الحذف بنجاح');
    }
}
