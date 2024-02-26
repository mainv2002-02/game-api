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
        $question = Question::getInstance($questionId);
        $track = null;
        if ($question->exists && !empty($question->hero_id)) {
            $track = Hero::getInstance($question->hero_id);
        }
        return view('game.question-detail')->with('question',$question)->with('track', $track);
    }

    public function answer(BaseRequest $request): View
    {
        return view('game.question-detail');
    }
}