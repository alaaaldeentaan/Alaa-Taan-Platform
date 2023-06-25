<?php

namespace App\Models\Option;

use App\Models\Question\Question;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}