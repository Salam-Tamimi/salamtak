<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'mobile',
        'image',
        'role',
        'hospital_id',
        'doctor_id',
        'appointment_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'role' => 'string',
    ];


    public function appointments()
    {
        return $this->hasMany(Appointment::class)->with('user')->whereNotNull('user_id');
    }

    public function hospitals() 
    {
        return $this->belongsTo(Hospital::class, 'hospital_id');
    }
    public function doctors() 
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }

    // public function departments() 
    // {
    //     return $this->hasMany(Department::class);
    // }
}
