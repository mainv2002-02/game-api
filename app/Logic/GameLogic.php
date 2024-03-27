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

    public function getCurrentQuestion(): ?Question
    {
        return GameUtility::currentQuestion();
    }

    public function answer(array $params): Record
    {
        $currentQuestion = $this->getCurrentQuestion();
        $diff = array_diff($params, $currentQuestion->answer ?? []);
        $exist = Record::query()
                       ->where([
                                   'user_id'     => Auth::id(),
                                   'hero_id'     => Auth::user()->current_hero,
                                   'track_id'    => $currentQuestion->getAttribute('track_id'),
                                   'question_id' => $currentQuestion->getKey(),
                               ])
                       ->count();
        return Record::create([
                                  'user_id'     => Auth::id(),
                                  'hero_id'     => Auth::user()->current_hero,
                                  'track_id'    => $currentQuestion->getAttribute('track_id'),
                                  'question_id' => $currentQuestion->getKey(),
                                  'answer'      => $params,
                                  'times'       => $exist + 1,
                                  'point'       => !empty($diff) ? 0 : (2 - $exist),
                              ]);
    }
}