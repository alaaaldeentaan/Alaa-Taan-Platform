<?php

namespace App\Models\Teacher;

use App\Models\Account\Account;
use App\Models\Course_Traning\Course_Traning;
use App\Models\Episode\Episode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use HasFactory;

    protected $guard = "teacher";

    protected $fillable = [
        'name',
        'user_Name',
        'language',
        'phone',
        'dob',
        'gender',
        'address',
        'email',
        'password',
        'is_aproved',
        // 'certificate_img'
        // 'certificate_img' => 'required|image|mimes:jpeg,jpg,png,gif|max:200',
        // 'certificate_img' => 'required|image|mimes:jpg,jpeg,png,gif|max:200',
        'certificate_img' => 'required|image|mimes:jpg,png,jpeg,gif|max:200',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
    public function coursetranings()
    {
        return $this->hasMany(Course_Traning::class);
    }
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}