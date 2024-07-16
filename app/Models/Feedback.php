<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'table_id', 'name', 'phone', 'comment','structure_id'
    ];

    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class, 'feedback_quiz')->withPivot('rating');
    }
}
