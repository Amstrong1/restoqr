<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use RealRashid\SweetAlert\Facades\Alert;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.quiz.index', [
            'quizzes' => Quiz::all(),
            'my_actions' => $this->quiz_actions(),
            'my_attributes' => $this->quiz_columns(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.quiz.create', [
            'my_fields' => $this->quiz_fields()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuizRequest $request)
    {
        $quiz = new Quiz();

        $quiz->structure_id = Auth::user()->structure_id;
        $quiz->quiz = $request->quiz;
       

        if ($quiz->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('quiz');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        return view('admin.quiz.show', [
            'quiz' => $quiz,
            'my_fields' => $this->quiz_fields(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        return view('admin.quiz.edit', [
            'quiz' => $quiz,
            'my_fields' => $this->quiz_fields(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        $quiz = Quiz::find($quiz->id);

        $quiz->structure_id = Auth::user()->structure_id;
        $quiz->quiz = $request->quiz;
                
        if ($quiz->save()) {
            Alert::toast('Opération éffectué avec succès', 'success');
            return redirect('quiz');
        };
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        try {
            $quiz = $quiz->delete();
            Alert::success('Opération éffectué avec succès', 'Supprimé');
            return redirect('quiz');
        } catch (\Exception $e) {
            Alert::error('Une erreur est survenue', 'Element introuvable', );
            return redirect()->back();
        }
    }


    private function quiz_columns()
    {
        $columns = (object) [
            'quiz' => 'Question',
        ];
        return $columns;
    }

    private function quiz_actions()
    {
        $actions = (object) array(
            'edit' => 'Modifier',
            'delete' => "Supprimer",
        );
        return $actions;
    }

    private function quiz_fields()
    {
        $fields = [
            'quiz' => [
                'title' => 'Question',
                'field' => 'text'
            ],
           
        ];
        return $fields;
    }
}
