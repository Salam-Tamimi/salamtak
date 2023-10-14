<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'is_active',
        'hospital_id',
    ];

    public function doctors() 
    {
        return $this->hasMany(Doctor::class, 'department_id');
    }

    public function appointments() 
    {
        return $this->hasMany(Appointment::class, 'department_id');
    }
    public function hospitals() 
    {
        return $this->belongsTo(Hospital::class, 'id');
    }

    // public function hospital_departments() 
    // {
    //     return $this->hasMany(Hospital_department::class, 'department_id');
    // }
}
