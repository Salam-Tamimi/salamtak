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

    public function appointment() 
    {
        return $this->hasOne(Appointment::class, 'review_id');
    }

}
