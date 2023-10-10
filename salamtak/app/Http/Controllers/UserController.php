<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::where('role', 'admin')->get();
        // return view('admin.pages.patients-list.index', compact('users'));
        // $user = User::all();
        // if ($user->role === 'admin') {
        //     return redirect()->route('admin.pages.patients-list.index', compact('users'));
        // } elseif ($user->role === 'user') {
        //     return redirect('/');
        // }
        $user = auth()->user();

        if ($user->role === 'admin') {
            $users = User::where('role', 'admin')->get();
            return view('admin.pages.patients-list.index', compact('users'));
        } elseif ($user->role === 'user') {
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        if ($user->role === 'admin') {
            return view('admin.pages.patients-list.create');
        } elseif ($user->role === 'user') {
            return redirect('/');
        }
        // return view('admin.pages.patients-list.create');

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
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'mobile' => 'nullable|numeric',
    ]);
    
    // Handle image upload
    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
    }

    User::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')),
        'role' => 'user', 
        'image' => $imagePath, // Store image path
        'mobile' => $request->input('mobile'),
    ]);
    return redirect()->route('users.index')->with('success', 'تمت عملية الإنشاء بنجاح');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
     return view('admin.pages.patients-list.index', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if ($user->role === 'admin') {
            return view('admin.pages.patients-list.edit', compact('user'));
        } elseif ($user->role === 'user') {
            return redirect('/');
        }
        // return view('admin.pages.patients-list.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image upload
            'mobile' => 'nullable|numeric', 
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the previous image if it exists
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
            // Store the new image
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $user->image; // Keep the existing image path
        }

        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->filled('password') ? bcrypt($request->input('password')) : $user->password,
            'image' => $imagePath, // Store image path
            'mobile' => $request->input('mobile'),
        ]);

        if ($user->role === 'admin') {
            return redirect()->route('admin.pages.patients-list.edit', $user->id)->with('success', 'تمت عملية التعديل بنجاح');
        } elseif ($user->role === 'user') {
            return redirect('/');
        }
        // return redirect()->route('users', $user->id)->with('success', 'تمت عملية التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $user->role === 'admin' && $user->id !== $targetUser->id;
        User::destroy($id);
        return back()->with('success', 'تمت عملية الحذف بنجاح');
    }
}
