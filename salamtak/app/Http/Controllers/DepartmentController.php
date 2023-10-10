<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $departments = Department::all();
        // Retrieve the hospital ID from the URL parameters
        // $hospitalId = $request->route('hospitalId');
        
        // $hospital = Hospital::find($hospitalId);
        // if ($hospital) {
        //     $departments = $hospital->departments;
        // } else {
        //     $departments = [];
        // }
        $user = auth()->user();
        if ($user->role === 'admin') {
            // $selectedHospital = Hospital::find($hospitalId);

            // if ($selectedHospital) {
            //     $departments = $selectedHospital->departments;
            // } else {
            //     // Handle the case where the hospital is not found.
            // }
            return view('admin.pages.hospitals-admin.index', compact('departments'));
        }elseif ($user->role === 'hospital'){
            return redirect('hospital.pages.departments-admin.index', compact('hospitals'));
        }else{
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
        return view('hospital.pages.departments-admin.create');
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
            'name' => 'required',
            'is_active' => 'boolean', 
        ]);
        $validatedData['is_active'] = $request->has('is_active');
        Department::create($validatedData);
        return  redirect()->route('departments-admin.index')->with('success', 'تم إنشاء القسم بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('hospital.pages.departments-admin.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'is_active' => 'boolean', 
        ]);

        $department = Department::findOrFail($id); 
        $department->update($validatedData);

        return redirect()->route('departments-admin.index')->with('success', 'تم تعديل القسم بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::destroy($id);
        return back()->with('success', 'تم حذف القسم بنجاح');
    }
}
