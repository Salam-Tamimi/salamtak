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
        // dd('2');
        $user = Auth::user();

        if ($user->role === 'hospital') {
            // $hospital_id= User::where('id',Auth::user()->id)->get('hospital_id');
            $hospital = Hospital::where('id',Auth::user()->hospital_id)->first();
            // dd($hospital);
            // $activeDepartments = Department::where('is_active', true)->get();
            $departments = Department::where('hospital_id',Auth::user()->hospital_id)->get();
            return view('hospital.pages.hospitals-details.index', compact('hospital', 'departments'));
     }else {
        return redirect('/');
     }
    }
    public function showHospital(Request $request, $hospital_id)
    {
        // Retrieve the hospital information using the Hospital model
        // $hospital = User::where('hospital_id', $hospital_id)->first();
        $hospital = User::where('hospital_id', $hospital_id)
        ->where('role', 'hospital')
        ->first();
        // dd($hospital_id);
        // dd($hospital->hospitals->video);
        // dd($hospital->hospitals->location);
        $departments = Department::where('hospital_id', $hospital_id)->get();        // Pass the hospital data to the view
        return view('pages.hospital-single', compact('hospital', 'departments'));
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
        // $departments = Department::all();
        $doctors = Doctor::all();
        return View::make('hospital.pages.hospitals-details.create',compact('doctors','hospitals', 'activeDepartments'));
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

        if ($user->role === 'hospital') {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'video' => 'nullable',
            'virtual_tour' => 'nullable',
            'image' => 'required|image',
        ]);
        Hospital::create($validatedData);
    }

        return  redirect()->route('hospitals-details.index')->with('success', 'تم إنشاء المستشفى بنجاح');
    }
    
    
    public function show($id)
    {  
        $departments = Department::where('id', $id)->get();
        // $hospital = Hospital::findOrFail($id);
        // $doctors = Doctor::where('id', $id)->get();
        return view('admin.pages.departments_doctors', compact('departments'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd('2');
        // $departments = Department::all();
        // $hospital = Hospital::findOrFail($id);
        return view('hospital.pages.hospitals-details.edit');
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
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'location' => 'required',
        //     'video' => 'nullable', 
        //     'virtual_tour' => 'nullable', 
        //     'image' => 'required|image', 
        // ]);

        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('images'); 
        //     $validatedData['image'] = $imagePath;
        // }

        // foreach ($request->input('departments') as $departmentData) {
        //     $department = Department::find($departmentData['id']);

        //     if ($department) {
        //         $department->update([
        //             'is_active' => isset($departmentData['name']),
        //         ]);
        //     }
        // }
        // $hospital = Hospital::findOrFail($id); 
        // $hospital->update($validatedData);

        // return redirect()->route('hospitals-admin.index')->with('success', 'تم تعديل المستشفى بنجاح');
        $user = Auth::user();

        if ($user->role === 'hospital') {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'video' => 'nullable',
            'virtual_tour' => 'nullable',
            'image' => 'required|image',
        ]);
        $validatedData['user_id'] = $user->id;
        // Create a new hospital record
        $hospital = Hospital::create($validatedData);

        // Handle file upload
        if ($request->hasFile('image')) {
            // $imagePath = $request->file('image')->store('images'); 
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }


// // Handle file upload
// if ($request->hasFile('image')) {
//     $imagePath = $request->file('image')->store('images', 'public');

//     // Update the image field with the relative path or URL
//     $hospital->update(['image' => $imagePath]); // Assuming $hospital is the model instance

//     $validatedData['image'] = $imagePath;
// }
// $validatedData['image'] = $imagePath; // Store the temporary file path

        // Update the hospital_id of the currently logged-in user with the new hospital's ID
        User::where('id', $user->id)->update(['hospital_id' => $hospital->id]);
    }

        return  redirect()->route('hospitals-details.index')->with('success', 'تم إنشاء المستشفى بنجاح');
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
        return redirect()->route('hospitals-details.index')->with('success', 'تم حذف المستشفى بنجاح');
    }
}