<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_hospital extends Model
{
    use HasFactory;

    public function doctors() 
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }

    public function hospitals() 
    {
        return $this->belongsTo(Hospital::class,'hospital_id');
    }
}
