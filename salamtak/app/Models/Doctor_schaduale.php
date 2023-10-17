<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor_schaduale extends Model
{
    use HasFactory;

    protected $fillable = [
        'day_of_week', 
        'start_time', 
        'end_time', 
        'doctor_id', 
    ];

    public function doctors() 
    {
        return $this->belongsTo(Doctor::class);
    }
}
