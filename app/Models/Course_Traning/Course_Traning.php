<?php

namespace App\Models\Course_Traning;

use App\Models\Category_Course\Category_Course;
use App\Models\Episode\Episode;
use App\Models\Student\Student;
use App\Models\Teacher\Teacher;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_Traning extends Model
{
    use HasFactory;

    protected $fillable = [
        'price',
        'description',
        'aproved',
        'img'  => 'required|image|mimes:jpg,png,jpeg,gif|max:200',
    ];

    public function categorycourse()
    {
        return $this->belongsTo(Category_Course::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'ct_users_pivot');
    }
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
