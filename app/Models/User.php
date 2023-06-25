<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Account\Account;
use App\Models\Course_Traning\Course_Traning;
use App\Models\Quiz\Quiz;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.	first_name	last_name
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_name',
        'first_name',
        'last_name',
        'email',
        'img',
        'password',
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
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
    public function coursetranings()
    {
        return $this->belongsToMany(Course_Traning::class, 'ct_users_pivot');
    }
    public function quizs()
    {
        return $this->belongsToMany(Quiz::class, 'student_quize_pivot');
    }
}