<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Hospital;
use App\Models\Hospital_department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HospitalDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->role === 'admin') {
            $hospitals = Hospital::all();
            $departments = [];
            return view('admin.pages.departments_doctors', compact('hospitals', 'departments'));
        } elseif ($user->role === 'hospital') {
            // $hospitals = Hospital::with('departments')->get();
            // $hospital = User::where('id', $user->id);
            // dd('$hospital');
            // $departments = $hospital->departments;
            // $departments = Hospital_department::where('hospital_id', $hospital->id)->with('department')->get();            
            $hospital = Hospital::where('id', $user->hospital_id)->first(); // Retrieve the hospital instance
            $departments = [];
            return view('hospital.pages.departments-admin.index', compact('departments','hospital'));
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
        return view('hospital.pages.departments-admin.create');
    }
    // public function create($hospitalId)
    // {
    //     $hospital = Hospital::findOrFail($hospitalId);
    //     $departments = Department::all();

    //     return view('hospital.pages.departments-admin.create', compact('hospital', 'departments'));
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $user = Auth::user();
    
    //     if ($user && $user->role === 'hospital') {
    //         $validatedData = $request->validate([
    //             'name' => 'required|unique:departments,name',
    //             'is_active' => 'boolean',
    //         ]);
    
    //         $department = new Department($validatedData);
    //         $department->hospital_departments->hospital_id = $user->hospital_id;
    //         $department->save();
    
    //         return redirect()->route('departments-admin.index')->with('success', 'تم إنشاء القسم بنجاح');
    //     } else {
    //         return redirect('/');
    //     }
    // }
    public function store(Request $request, $hospitalId)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
        ]);

        $hospital = Hospital::findOrFail($hospitalId);
        $department = Department::findOrFail($request->input('department_id'));

        $hospital->departments()->attach($department);

        return redirect()->route('departments-admin.index')->with('success', 'تم إنشاء القسم بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Implement this method as needed
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $user = Auth::user();
    //     $department = Department::find($id);

    //     if ($user && $user->role === 'hospital' && $user->hospital_id && $department && $department->hospital_id === $user->hospital_id) {
    //         return view('hospital.pages.departments-admin.edit', ['department' => $department]);
    //     }

    //     return redirect('/');
    // }
    public function edit($hospitalId, $departmentId)
    {
        $hospital = Hospital::findOrFail($hospitalId);
        $department = Department::findOrFail($departmentId);

        return view('hospital.pages.departments-admin.edit', compact('hospital', 'department'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $user = Auth::user();
    //     $department = Department::find($id);

    //     if ($user && $user->role === 'hospital' && $user->hospital_id && $department && $department->hospital_id === $user->hospital_id) {
    //         $validatedData = $request->validate([
    //             'name' => 'required|unique:departments,name,' . $department->id,
    //             'is_active' => 'boolean',
    //         ]);
    //         $department->update($validatedData);
    //         return redirect()->route('departments-admin')->with('success', 'تم تعديل القسم بنجاح');
    //     }
    //     return redirect('/');
    // }
    public function update(Request $request, $hospitalId, $departmentId)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $hospital = Hospital::findOrFail($hospitalId);
        $department = Department::findOrFail($departmentId);

        // Update department properties as needed
        $department->name = $request->input('name');
        $department->save();

        return redirect()->route('departments-admin')->with('success', 'تم تعديل القسم بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//     public function destroy($id)
//     {
//         $user = Auth::user();
//         $department = Department::find($id);
//         if ($user && $user->role === 'hospital' && $user->hospital_id && $department && $department->hospital_id === $user->hospital_id) {
//             $department->delete();
//             return redirect()->route('departments-admin')->with('success', 'تم حذف القسم بنجاح');
//         }
//         return redirect('/');
//     }
// }
public function destroy($hospitalId, $departmentId)
{
    $hospital = Hospital::findOrFail($hospitalId);
    $department = Department::findOrFail($departmentId);

    $hospital->departments()->detach($department);

    return redirect()->route('departments-admin')->with('success', 'تم حذف القسم بنجاح');

}
}
