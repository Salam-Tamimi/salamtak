<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//     public function getDoctorsByHospital($hospitalId)
// {
//     $doctors = Doctor::where('hospital_id', $hospitalId)->get();
//     return response()->json($doctors);
// }
//     public function index()
//     {
//         // $doctors = User::where('role', 'doctor')->get();
//         // return view('admin.pages.doctors-list.index', compact('doctors'));
//         $user = auth()->user();
//         // $doctors = User::where('role', 'doctor')->get();
//         if ($user->role === 'admin') {
//             $hospitals = User::where('role', 'hospital')->get();
//             return view('admin.pages.doctors-list.index', compact('hospitals','doctors'));
//         }elseif ($user->role === 'hospital'){
//             return view('hospital.pages.doctors-hospital.index', compact('doctors'));
//         }else{
//             return redirect('/');
// }
//     }

public function getDoctorsByHospital($hospitalId)
{
    $doctors = Doctor::where('hospital_id', $hospitalId)->get();
    
    return view('your_view_name', compact('doctors'));
}

public function index()
{
    $user = auth()->user();
    $doctors = []; // Initialize an empty array
    
    if ($user->role === 'admin') {
        $hospitals = User::where('role', 'hospital')->get();
        // Retrieve doctors based on your logic and store them in the $doctors array
    } elseif ($user->role === 'hospital') {
        // Retrieve doctors based on your logic and store them in the $doctors array
    } else {
        return redirect('/');
    }

    return view('admin.pages.doctors-list.index', compact('hospitals', 'doctors'));
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments=Department::all();
        return view('hospital.pages.doctors-hospital.create', compact('departments'));
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
            'image' => 'required|image',
            'price' => 'required', 
            'experience' => 'required', 
            'department_id' => 'required', 
        ]);
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $validatedData['image'] = $imagePath; 
        }
        User::create($validatedData);
        return  redirect('doctors-hospital')->with('success', 'تمت عملية الإنشاء بنجاح');
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
        $departments=Department::all();
        $doctor = User::findOrFail($id);
        return view('admin.pages.doctors-list.edit', ['departments' => $departments, 'doctor' => $doctor]);
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
            'image' => 'required|image', 
            'price' => 'required', 
            'experience' => 'required', 
            'department_id' => 'required', 
        ]);

        $doctor = User::findOrFail($id);

        $doctor->update($validatedData);

        return redirect('doctors-hospital')->with('success', 'تمت عملية التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return back()->with('success', 'تمت عملية الحذف بنجاح');
    }
}
