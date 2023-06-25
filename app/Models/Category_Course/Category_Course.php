<?php

namespace App\Models\Category_Course;

use App\Models\Admin\Admin;
use App\Models\Course_Traning\Course_Traning;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Course extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'img'  => 'required|image|mimes:jpg,png,jpeg,gif|max:200',
    ];
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function coursetranings()
    {
        return $this->hasMany(Course_Traning::class);
    }
}