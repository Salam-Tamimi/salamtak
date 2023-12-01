<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'location', 
        'video', 
        'virtual_tour', 
        'image',
        'user_id',  
    ];


    // public function users() 
    // {
    //     return $this->belongsTo(User::class, 'hospital_id');
    // }
    public function user() 
{
    return $this->belongsTo(User::class, 'user_id');
}

// public function hospital_departments() 
// {
//     return $this->hasMany(Hospital_department::class, 'hospital_id');
// }

// public function doctor_hospitals() 
// {
//     return $this->hasMany(Doctor_hospital::class, 'hospital_id');
// }

public function doctors() 
{
    return $this->hasMany(Doctor::class, 'hospital_id');
}
public function departments() 
{
    return $this->hasMany(Department::class, 'hospital_id');
}

public function appointments() 
{
    return $this->hasMany(Appointment::class, 'hospital_id');
}

}
