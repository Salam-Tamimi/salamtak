<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class Hospital_detailsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//     public function __construct()
// {
//     $this->middleware('auth');
//     $this->middleware('role:hospital')->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
//     $this->middleware('role:admin')->only(['index','create2', 'store2',]);
// }

    // public function index()
    // {
    //     if (Auth::id()) {
    //         $role = Auth()->user()->role;
    //         if ($role == 'hospital') {
    //             // $id = Auth::user()->id;
    //             // $user = User::find($id);
    //             // $hospitaluser = Hospital::where('id', $user)->get();
    //             // return view('hospital.pages.hospitals-admin.index', compact('hospitaluser'));
    //             $activeDepartments = Department::where('is_active', true)->get();
    //             $hospitals = Hospital::all();
    //             $departments = Department::all();
    //             return View::make('hospital.pages.hospitals-admin.index', compact('hospitals', 'activeDepartments', 'departments'));
    //         } elseif ($role == 'admin') {
    //             $hospitals = Hospital::all();
    //             return view('admin.pages.hospitals-admin.index', compact('hospitals'));
    //         }
    //     }
    // }
    
    public function index()
     {
            $hospitals = Hospital::all();
            $activeDepartments = Department::where('is_active', true)->get();
            $departments = Department::all();
            return view('hospital.pages.hospitals-admin.index', compact('hospitals', 'activeDepartments', 'departments'));
        }
    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activeDepartments = Department::where('is_active', true)->get();
        $hospitals = Hospital::all();
        $departments = Department::all();
        $doctors = Doctor::all();
        return View::make('hospital.pages.hospitals-admin.create',compact('doctors','hospitals', 'activeDepartments', 'departments'));
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
            'location' => 'required',
            'video' => 'nullable',
            'virtual_tour' => 'nullable',
            'image' => 'required|image',
        ]);
        Hospital::create($validatedData);

        return  redirect()->route('hospitals-admin.index')->with('success', 'تم إنشاء المستشفى بنجاح');
    }
    
    
    public function show(Hospital $hospital)
    {  
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departments = Department::all();
        $hospital = Hospital::findOrFail($id);
        return view('admin.pages.hospitals-admin.edit', compact('hospital', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'video' => 'nullable', 
            'virtual_tour' => 'nullable', 
            'image' => 'required|image', 
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images'); 
            $validatedData['image'] = $imagePath;
        }

        foreach ($request->input('departments') as $departmentData) {
            $department = Department::find($departmentData['id']);

            if ($department) {
                $department->update([
                    'is_active' => isset($departmentData['name']),
                ]);
            }
        }
        $hospital = Hospital::findOrFail($id); 
        $hospital->update($validatedData);

        return redirect()->route('hospitals-admin.index')->with('success', 'تم تعديل المستشفى بنجاح');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hospital::destroy($id);
        return back()->with('success', 'تم حذف المستشفى بنجاح');
    }
}
