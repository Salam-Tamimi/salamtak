<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'day_of_week', 
        'start_time', 
        'end_time', 
        'id', 
        'hospital_id', 
        'department_id',
        'doctor_id',
        'payment_id',
        'review_id',
    ];

    // public function user() 
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function user() 
    {
        return $this->belongsTo(User::class, 'appointment_id', 'id');
    }

    public function hospital() 
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }

    public function department() 
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function payment() 
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }

    public function review() 
    {
        return $this->belongsTo(Review::class, 'review_id');
    }

    public function doctor() 
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

}
