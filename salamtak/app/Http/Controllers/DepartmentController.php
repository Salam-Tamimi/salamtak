<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request)
     {
         $hospitals = Hospital::all();
         $user = auth()->user();
         
         if ($user->role === 'admin') {
             return view('admin.pages.hospitals-admin.index', compact('hospitals'));
         } elseif ($user->role === 'hospital') {
             $hospitalId = $user->hospital_id;
             $hospital = Hospital::find($hospitalId);
             
             if ($hospital) {
                 $departments = $hospital->departments;
             } else {
                 $departments = [];
             }
             
             return view('hospital.pages.departments-admin.index', compact('departments'));
         } else {
             return redirect('/');
         }
     }
     
     public function create()
     {
         return view('hospital.pages.departments-admin.create');
     }
     
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'name' => 'required',
             'is_active' => 'boolean',
         ]);
     
         $validatedData['is_active'] = $request->has('is_active');
         
         // Create a new department and save it to the database
         $department = Department::create($validatedData);
     
         // You may want to update the departments variable with the new department
         // so it appears in the index view
         $departments = Department::all();
     
         return view('hospital.pages.departments-admin.index', compact('departments'))->with('success', 'تم إنشاء القسم بنجاح');
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
    
    public function destroy($id)
    {
        $department = Department::findOrFail($id);
        $department->delete();
    
        return back()->with('success', 'تم حذف القسم بنجاح');
    }
}