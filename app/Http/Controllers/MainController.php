<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    private $app_data;

    public function __construct()
    {
        $this->app_data = require(app_path('app_data.php'));
    }

    public function startGame(): View
    {
        return view('home');
    }

    public function prepareGame(Request $request)
    {
        $request->validate(
        [
            'total_questions' => 'required|integer|min:3|max:30'
        ],
        [
            'total_questions.required' => 'O número de questões é obrigatório',
            'total_questions.integer' => 'O número de questões tem que ser um valor inteiro',
            'total_questions.min' => 'O número de questões tem que ser até :min questões',
            'total_questions.max' => 'O número de questões tem que ser até :max questões',
        ]
        
        );
        $total_questions = intval($request->input('total_questions'));
    
        $quiz = $this->prepareQuiz($total-questions);

        dd($quiz);
    }

    private function prepareQuiz($total_questions)
    {

    }
}
