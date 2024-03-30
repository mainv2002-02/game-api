<?php

namespace App\Utilities;

use App\Models\Question;
use App\Models\Record;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GameUtility extends Utility
{

    public static function finishAllTracks(): bool
    {
        $heroId = Auth::user()->hero_id;
        if ($heroId == 3) {
            $data = Auth::user()->data;
            $maxTrackId = $data['hero_3']['track_3'];
        } else {
            $maxTrackId = $heroId == 1 ? 103 : 203;
        }
        $lastTrackCount = Record::query()
                        ->where('user_id', Auth::id())
                        ->where('track_id', $maxTrackId)
                        ->whereNested(function ($query) {
                            return $query->where('point', '>=', 1)
                                         ->orWhere('times', 2);
                        })
                        ->count();
        $totalQuestion = Question::query()
                                 ->where('track_id', $maxTrackId)
                                 ->count();
        return $lastTrackCount == $totalQuestion;
    }

    public static function currentQuestion(): ?Question
    {
        if (self::finishAllTracks()) {
            return null;
        }
        $lastQuestion = Question::getLastQuestion();
        $maxId = $lastQuestion ? $lastQuestion->getKey() : 0;
        $trackId = $lastQuestion ? $lastQuestion->getAttribute('track_id') : 0;
        if (!$trackId) {
            $trackId = match (Auth::user()->hero_id) {
                1 => 101,
                2 => 201,
                3 => Auth::user()->data['hero_3']['track_1'],
            };
        }

        /** @var Builder $query */
        $query = Question::query()
                         ->where('id', '>', $maxId)
                         ->where('track_id', $trackId)
                         ->orderBy('id');

        $currentQuestion = $query->first();

        if (!$currentQuestion) {
            if (Auth::user()->hero_id == 3) {
                $key = $trackId % 100 + 1;
                $trackId = Auth::user()->data['hero_3']["track_{$key}"];
            } else {
                $trackId++;
            }
            $currentQuestion = Question::query()
//                                       ->where('id', '>', $maxId)
                                       ->where('track_id', $trackId)
                                       ->orderBy('id')
                                       ->first();
        }
        return $currentQuestion;
    }

    public static function calculatePoint(User $currentUser, Question $currentQuestion,)
    {

    }
}