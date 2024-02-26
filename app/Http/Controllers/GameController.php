<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseRequest;
use App\Models\Hero;
use App\Models\Question;
use Illuminate\View\View;

class GameController extends Controller
{
    public function show(int $questionId, string $slug): View
    {
        /** @var Question $question */
        $question = Question::getInstance($questionId);
        $track = $question->hero;
        return view('game.question-detail')->with('question', $question)->with('track', $track);
    }

    public function answer(BaseRequest $request): View
    {
        return view('game.question-detail');
    }
}