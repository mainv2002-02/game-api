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
        if (Auth::user()->hero_id == $heroId) {
            return true;
        }
        $heroes = Auth::user()->heroes;
        if (empty(Auth::user()->hero_id) || GameUtility::finishAllTracks() || !in_array($heroId, $heroes)) {
            Auth::user()->state = [
                'hero_id'     => $heroId,
                'question_id' => null,
            ];
            if ($heroId == 3) {
                Auth::user()->data = [
                    'hero_3' => [
                        'track_1' => ((rand() % 2) + 1) * 100 + 1,
                        'track_2' => ((rand() % 2) + 1) * 100 + 2,
                        'track_3' => ((rand() % 2) + 1) * 100 + 3,
                    ]
                ];
            }
            $heroes[] = $heroId;
            Auth::user()->heroes = $heroes;
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
                                   'hero_id'     => Auth::user()->hero_id,
                                   'track_id'    => $currentQuestion->getAttribute('track_id'),
                                   'question_id' => $currentQuestion->getKey(),
                               ])
                       ->count();
        return Record::create([
                                  'user_id'     => Auth::id(),
                                  'hero_id'     => Auth::user()->hero_id,
                                  'track_id'    => $currentQuestion->getAttribute('track_id'),
                                  'question_id' => $currentQuestion->getKey(),
                                  'answer'      => $params,
                                  'times'       => $exist + 1,
                                  'point'       => !empty($diff) ? 0 : (2 - $exist),
                              ]);
    }
}