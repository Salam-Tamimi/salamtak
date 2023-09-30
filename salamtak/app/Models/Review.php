<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment', 
        'review', 
    ];

    public function appointments() 
    {
        return $this->belongsTo(Appointment::class,'review_id');
    }
}
