<?php

namespace App\Models\Account;

use App\Models\Admin\Admin;
use App\Models\Teacher\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}