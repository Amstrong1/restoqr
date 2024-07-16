<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['quiz', 'structure_id'];

    public function feedbacks()
    {
        return $this->belongsToMany(Feedback::class, 'feedback_quiz')->withPivot('rating');
    }
}
