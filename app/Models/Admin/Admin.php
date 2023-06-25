<?php

namespace App\Models\Admin;

use App\Models\Account\Account;
use App\Models\Category_Course\Category_Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = "admin";

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function account()
    {
        return $this->belongsTo(Account::class);
    }
    public function categorycourse()
    {
        return $this->hasOne(Category_Course::class);
    }
}