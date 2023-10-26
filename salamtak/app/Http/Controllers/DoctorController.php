<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Hospital_department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

// public function getDoctorsByHospital($hospitalId)
// {
//     $doctors = Doctor::where('hospital_id', $hospitalId)->get();
    
//     return view('hospital.pages.doctors-hospital.index', compact('doctors'));
// }

public function index()
{
    $user = auth()->user();
    
    if ($user->role === 'hospital') {
        // Get all the doctors belonging to this hospital
        $doctors = User::where('hospital_id', $user->hospital_id)
            ->where('role', 'doctor')
            ->get();
        // Append the full image URL to each doctor object
        $doctors->each(function ($doctor) {
            $doctor->image = asset('storage/' . $doctor->image);
        });
        
        return view('hospital.pages.doctors-hospital.index', compact('doctors'));
    } else {
        return redirect('/');
    }
}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $departments=Department::all();
        // $departments = Department::where('id', $request->input('department_id'))->get();
        $hospitalId = auth()->user()->hospital_id;
        $departments = Department::where('hospital_id', $hospitalId)->get();
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
         $user = auth()->user();
     
         // Check if the authenticated user has the "hospital" role
         if ($user->role === 'hospital') {
             $request->validate([
                 'name' => 'required|string',
                 'email' => 'required|email|unique:users',
                 'password' => 'required|min:6',
                 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation as needed
                 'department_id' => 'required',
             ]);
     
             $hospitalId = $user->hospital_id;
     
             // Store the image in the 'public' disk
             $imagePath = $request->file('image')->store('doctor_images', 'public');
     
             // Create a new user with the role "doctor" and associate them with the hospital
             User::create([
                 'email' => $request->input('email'),
                 'password' => Hash::make($request->input('password')),
                 'name' => $request->input('name'),
                 'image' => $imagePath,
                 'department_id' => $request->input('department_id'),
                 'role' => 'doctor',
                 'hospital_id' => $hospitalId,
             ]);
     
             return redirect()->route('doctors-hospital.index')->with('success', 'تمت عملية الإنشاء بنجاح');
         } elseif ($user->role === 'doctor') {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'department_id' => 'required|integer',
                'experience' => 'required|string|max:255',
                'price' => 'required|numeric',
            ]);
            $validatedData['hospital_id'] = auth()->user()->hospital_id;
            $validatedData['doctor_id'] = auth()->user()->doctor_id;

            $imagePath = $request->file('image')->store('public/images');
    
            $validatedData['image'] = $imagePath;
    
            Doctor::create($validatedData);
            $hospitalId = auth()->user()->hospital_id;
            $departments = Department::where('hospital_id', $hospitalId)->get();
            return redirect()->route('doctors-hospital.index', compact('departments'))->with('success', 'تمت عملية الإنشاء بنجاح');
        }
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
    // public function edit($id)
    // {
    //     $hospitalId = auth()->user()->hospital_id;
    //     $departments = Department::where('hospital_id', $hospitalId)->get();
    //     $doctor = User::findOrFail($id);
    //     return view('hospital.pages.doctors-hospital.edit', ['departments' => $departments, 'doctor' => $doctor]);
    // }
    public function edit($id)
{
    // Retrieve the doctor record based on the ID
    $doctor = User::findOrFail($id); // Assuming you're using the "User" model

    // Check if the authenticated user has permission to edit this doctor
    if (auth()->user()->role === 'hospital' && $doctor->hospital_id === auth()->user()->hospital_id) {
        $hospitalId = auth()->user()->hospital_id;
        $departments = Department::where('hospital_id', $hospitalId)->get();

        return view('hospital.pages.doctors-hospital.edit', compact('departments', 'doctor'));
    }

    return redirect()->route('doctors-hospital.index')->with('error', 'You do not have permission to edit this doctor.');
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $user = auth()->user();
    //     if ($user->role === 'hospital') {
    //         $doctor = Doctor::findOrFail($id); // Update Doctor model, not User model
    
    //         // Check if the hospital is authorized to update this doctor
    //         // if ($doctor->hospital_id !== $user->hospital_id) {
    //         //     return redirect()->route('doctors-hospital.index')->with('error', 'You do not have permission to update this doctor.');
    //         // }

    //         $validatedData = $request->validate([
    //             'email' => 'required|email|unique:users,email,' . $doctor->id,
    //             'name' => 'required|string',
    //             'department_id' => 'required|numeric',
    //             'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
    //         ]);
    
    //         $doctor->email = $validatedData['email'];
    //         $doctor->name = $validatedData['name'];
    //         $doctor->department_id = $validatedData['department_id'];
    
    //         if ($request->hasFile('image')) {
    //             $imagePath = $request->file('image')->store('doctor_images', 'public');
    //             $doctor->image = $imagePath;
    //         }
    //         $doctor->save();
    
    //         $hospitalId = auth()->user()->hospital_id;
    //         $departments = Department::where('hospital_id', $hospitalId)->get();
    //         return redirect()->route('doctors-hospital.index', compact('departments'))->with('success', 'تمت عملية التحديث بنجاح');
    //     }
    // }
    public function update(Request $request, $id)
{
    $user = auth()->user();
    
    if ($user->role === 'hospital') {
        $doctor = User::findOrFail($id);

        // Check if the hospital is authorized to update this doctor
        if ($doctor->hospital_id === $user->hospital_id) {
            $request->validate([
                'email' => 'required|email|unique:users,email,' . $doctor->id,
                'name' => 'required|string',
                // 'department_id' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $doctor->email = $request->input('email');
            $doctor->name = $request->input('name');
            $doctor->department_id = $request->input('department_id');

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('doctor_images', 'public');
                $doctor->image = $imagePath;
            }

            $doctor->save();

            $hospitalId = auth()->user()->hospital_id;
            $departments = Department::where('hospital_id', $hospitalId)->get();

            return redirect()->route('doctors-hospital.index', compact('departments'))
                ->with('success', 'تمت عملية التحديث بنجاح');
        }

        return redirect()->route('doctors-hospital.index')
            ->with('error', 'You do not have permission to update this doctor.');
    }
}

    
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = auth()->user();
    
        if ($user->role === 'hospital') {
            $doctor = User::findOrFail($id);
    
            // Check if the hospital is authorized to delete this doctor
            if ($doctor->hospital_id === $user->hospital_id) {
                $doctor->delete();
                return back()->with('success', 'تمت عملية الحذف بنجاح');
            } else {
                return back()->with('error', 'لا تمتلك الصلاحية لحذف هذا الطبيب');
            }
        }
    }
    
}
