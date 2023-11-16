<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'experience', 
        'price', 
        'department_id', 
        'image',
        'review_id',
        'hospital_id'
    ];

    public function users() 
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
    
    public function departments() 
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function hospitals() 
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }
 
    public function appointments() 
    {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }

    // public function hospital_departments() 
    // {
    //     return $this->hasMany(Hospital_department::class, 'hospital_id');
    // }

    public function doctor_schaduales() 
    {
        return $this->hasMany(Doctor_schaduale::class, 'doctor_id');
    }
}
