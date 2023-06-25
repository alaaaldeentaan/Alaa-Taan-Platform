<?php

namespace App\Models\Episode;

use App\Models\Course_Traning\Course_Traning;
use App\Models\Quiz\Quiz;
use App\Models\Teacher\Teacher;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        // 'link' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required',
        'link' => 'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|required',
        'img'  => 'required|image|mimes:jpg,png,jpeg,gif|max:200',
    ];
    public function coursetraning()
    {
        return $this->belongsTo(Course_Traning::class);
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function quiz()
    {
        return $this->hasOne(Quiz::class);
    }
}