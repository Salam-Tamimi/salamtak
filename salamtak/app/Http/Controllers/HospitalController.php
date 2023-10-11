<?php
namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
{
    $this->middleware('admin'); 
}

    public function index()
{
    $user = auth()->user();
    if ($user->role === 'admin') {
        $hospitals = User::where('role', 'hospital')->get();
        // dd($hospitals);
        return view('admin.pages.hospitals-admin.index', compact('hospitals'));
    }else{
        return redirect('/');
}
    // $hospitals = User::where('role', 'hospital')->get();
    // return view('admin.pages.hospitals-admin.index', compact('hospitals'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        // $doctors = Doctor::all();
        return View::make('admin.pages.hospitals-admin.create');
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
            'email' => 'required',
            'password' => 'required|min:8',
            'image' => 'required|image',
            'mobile' => 'nullable',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role'] = 'hospital';
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $validatedData['image'] = $imagePath; 
        }
        User::create($validatedData);
        return  redirect()->route('hospitals-admin.index')->with('success', 'تم إنشاء المستشفى بنجاح');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
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
