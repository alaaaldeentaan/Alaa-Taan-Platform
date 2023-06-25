<?php

namespace App\Models\Question;

use App\Models\Option\Option;
use App\Models\Quiz\Quiz;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    public function options()
    {
        return $this->hasMany(Option::class);
    }
}