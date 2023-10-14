<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Hospital;
use App\Models\Hospital_department;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        
        if ($user->role === 'admin') {
            $hospitals = Hospital::all();
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
        // $validatedData = $request->validate([
        //     'name' => 'required|unique:departments',
        //     'is_active' => 'boolean',
        // ]);
    
        // $validatedData['is_active'] = $request->has('is_active');
        // $validatedData['hospital_id'] = Auth::user()->hospital_id;
        // // $validatedData['hospital_id'] = Auth::hospital()->id;
    
        $department = Department::create([
            'name' => $request->name,
            'is_active' => $request->is_active,
            'hospital_id' => Auth::user()->hospital_id,
        ]);
        $departments = Department::all();
        return redirect()->route('departments-admin.index')->with('success', 'تم إنشاء القسم بنجاح');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hospitalId = auth()->user()->hospital_id;
        $department = Department::where('hospital_id', $hospitalId)->findOrFail($id);
    
        return view('hospital.pages.departments-admin.edit', compact('department'));
    }
    
    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|unique:departments,name,' . $id,
            'is_active' => 'boolean',
            // 'hospital_id' => Auth::user()->hospital_id,
        ]);
        
        $validatedData['is_active'] = $request->has('is_active');
        $validatedData['hospital_id'] = auth()->user()->hospital_id;
        $department = Department::where('hospital_id', Auth::user()->hospital_id)->findOrFail($id);
    
        $department->update($validatedData);
    
        return redirect()->route('departments-admin.index')->with('success', 'تم تعديل القسم بنجاح');
    }
    
    

    public function destroy($id)
    {
        Department::destroy($id);
    
        return redirect()->route('departments-admin.index')->with('success', 'تم حذف القسم بنجاح');
    }
    
}
