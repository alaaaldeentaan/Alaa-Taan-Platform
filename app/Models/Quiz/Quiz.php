<?php

namespace App\Models\Quiz;

use App\Models\Episode\Episode;
use App\Models\Question\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'student_quize_pivot');
    }
}