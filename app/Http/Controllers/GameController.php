<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseRequest;
use App\Models\Hero;
use App\Models\Question;
use App\Models\Track;
use Illuminate\View\View;

class GameController extends Controller
{
    public function heroList(): View
    {
        return view('game.hero-list')->with('heros', Hero::get());
    }

    public function heroDetail(int $heroId, string $heroSlug): View
    {
        $heroInstance = Hero::getInstance($heroId);
        return view('game.hero-detail')->with('hero', $heroInstance)->with('tracks', $heroInstance->tracks);
    }

    public function trackDetail(int $trackId, string $trackSlug): View
    {
        $trackInstance = Track::getInstance($trackId);
        return view('game.track-detail')
            ->with('hero', $trackInstance->hero)
            ->with('track', $trackInstance)
            ->with('questions', $trackInstance->questions);
    }

    public function questionDetail(int $questionId, string $questionSlug): View
    {
        $questionInstance = Question::getInstance($questionId);
        $trackInstance = $questionInstance->track;

        return view('game.question-detail')
            ->with('hero', $trackInstance->hero)
            ->with('track', $trackInstance)
            ->with('question', $questionInstance);
    }

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