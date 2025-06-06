<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    protected $fillable = ['letter', 'text', 'isCorrect', 'file', 'question_id'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}

