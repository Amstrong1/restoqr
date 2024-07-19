<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {

        $feedback = Feedback::where('structure_id', Auth::user()->structure_id)->get();

        return view('admin.feedback.index', compact('feedback'));

    }

    public function show($feedback_id)
    {

        $feedback = Feedback::with(['quizzes' => function ($query) {
            $query->withPivot('rating');
        }])->findOrFail($feedback_id);

        $totalRating = 0;
        $quizCount = $feedback->quizzes->count();

        if ($quizCount > 0) {
            foreach ($feedback->quizzes as $quiz) {
                $totalRating += $quiz->pivot->rating;
            }
            $averageRating = $totalRating / $quizCount;
            $satisfactionRate = ($averageRating / 5) * 100;
        } else {
            $satisfactionRate = 0;
        }

        return view('admin.feedback.show', compact('feedback', 'satisfactionRate'));
    }

}
