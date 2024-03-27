<?php

namespace App\Logic;

use App\Models\Question;
use App\Models\Record;
use App\Utilities\GameUtility;
use Illuminate\Support\Facades\Auth;

class GameLogic extends BaseLogic
{
    public function setHero(int $heroId): bool
    {
        if (Auth::user()->current_hero == $heroId) {
            return true;
        }
        if (empty(Auth::user()->current_hero) || GameUtility::finishAllTracks()) {
            Auth::user()->current_hero = $heroId;
            if ($heroId == 3) {
                Auth::user()->data = [
                    'track_1' => ((rand() % 2) + 1) * 100 + 1,
                    'track_2' => ((rand() % 2) + 1) * 100 + 2,
                    'track_3' => ((rand() % 2) + 1) * 100 + 3,
                ];
            }
            return Auth::user()->save();
        }
        return false;
    }

    public function getCurrentQuestion() : Question
    {
        return GameUtility::currentQuestion();
    }
}