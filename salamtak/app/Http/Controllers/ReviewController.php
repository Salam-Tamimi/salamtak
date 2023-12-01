<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->role == 'user') {
        return view('pages.profile')->with('successMessage', 'Review added successfully');

        }elseif (Auth::user()->role == 'admin') {
        $reviews = Review::all();
        return view('admin.pages.reviews-admin.index', compact('reviews'));
        }elseif (Auth::user()->role == 'hospital') {
            // $reviews = Review::all();
            $hospitalId = Auth::user()->hospital_id;

            $reviews = Review::whereHas('appointments', function ($query) use ($hospitalId) {
                $query->where('hospital_id', $hospitalId);
            })->get();

        //     $review= Review::whereHas('appointments', function ($query) use ($hospitalId) {
        //         $query->where('hospital_id', $hospitalId);
        //     })->first();
        // dd($review->appointments);
            return view('hospital.pages.reviews-admin.index', compact('reviews'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($appointmentId)
    {
        $appointment = Appointment::findOrFail($appointmentId);

        return view('pages.reviews.create', compact('appointment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Appointment $appointment)
{
    if (Auth::user()->role == 'user') {
         // Validate the request
    $request->validate([
        'comment' => 'required|string',
        'review' => 'required|integer|min:1|max:5', 
    ]);

    // Create a new review
    $review = new Review([
        'comment' => $request->input('comment'),
        'review' => $request->input('review'),
    ]);

    // Save the review
    $review->save();

    // Associate the review with the appointment
    $appointment->review()->associate($review);

    // Save the appointment
    $appointment->save();

    // You can also associate the review with the user who created it if needed
    // $review->user()->associate(auth()->user())->save();

    return redirect('/edit-appointment')->with('success', 'تمت إضافة التقييم بنجاح');
} else {
        return view('404');

    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
