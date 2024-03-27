<?php

namespace App\Utilities;

use App\Models\Question;
use App\Models\Record;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class GameUtility extends Utility
{

    public static function finishAllTracks(): bool
    {
        $heroId = Auth::user()->current_hero;
        if ($heroId == 3) {
            $data = Auth::user()->data;
            $maxTrackId = $data['track_3'];
        } else {
            $maxTrackId = $heroId == 1 ? 103 : 203;
        }
        $query = Record::query()
                       ->where('user_id', Auth::id())
                       ->where('track_id', $maxTrackId)
                       ->whereNested(function ($query) {
                           return $query->where('point', '>=', 1)
                                        ->orWhere('times', 2);
                       });
        return (bool)$query->count();
    }

    public static function currentQuestion(): ?Question
    {
        if (self::finishAllTracks()) {
            return null;
        }
        $lastQuestion = Question::getLastQuestion();
        $maxId = $lastQuestion ? $lastQuestion->getKey() : 0;
        $trackId = $lastQuestion ? $lastQuestion->getAttribute('track_id') : 0;
        /** @var Builder $query */
        $query = Question::query()
                         ->where('id', '>', $maxId)
                         ->orderBy('id');
        if ($trackId) {
            $query->where('track_id', $trackId);
        }
        $currentQuestion = $query->first();
        if (!$currentQuestion) {
            $currentQuestion = Question::query()
                                       ->where('id', '>', $maxId)
                                       ->where('track_id', $trackId + 1)
                                       ->orderBy('id')
                                       ->first();
        }
        return $currentQuestion;
    }

    public static function calculatePoint(User $currentUser, Question $currentQuestion,)
    {

    }
}