<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 
        'time', 
        'hospital_id', 
        'department_id', 
        'payment_id',
        'review_id',
        'doctor_id'
    ];

    public function users() 
    {
        return $this->belongsTo(User::class, 'appointment_id');
    }

    public function hospitals() 
    {
        return $this->belongsTo(Hospital::class, 'id');
    }

    public function departments() 
    {
        return $this->belongsTo(Department::class, 'id');
    }

    public function doctors() 
    {
        return $this->belongsTo(Doctor::class, 'id');
    }

}
