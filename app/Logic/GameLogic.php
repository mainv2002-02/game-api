<?php

namespace App\Logic;

use App\Models\History;
use App\Models\Question;
use App\Models\Record;
use Exception;
use Illuminate\Support\Facades\Auth;

class GameLogic extends BaseLogic
{
    public function initHero(int $heroId): bool
    {
        if (Auth::user()->hero_id == $heroId) {
            return true;
        }
        $heroes = Auth::user()->heroes;
        if (empty(Auth::user()->hero_id) || !in_array($heroId, $heroes)) {
            if ($heroId == 3) {
                $track1 = ((rand() % 2) + 1) * 100 + 1;
                $track2 = ((rand() % 2) + 1) * 100 + 2;
                $track3 = ((rand() % 2) + 1) * 100 + 3;
                Auth::user()->data = [
                    'hero_3' => [
                        'track_1' => $track1,
                        'track_2' => $track2,
                        'track_3' => $track3,
                    ]
                ];
            } else {
                $track1 = ($heroId == 1) ? 101 : 201;
                $track2 = ($heroId == 1) ? 102 : 202;
                $track3 = ($heroId == 1) ? 103 : 203;
            }
            Auth::user()->state =
                [
                    'tracks'  => [
                        $track1 => $track1 * 10 + 1,
                        $track2 => $track2 * 10 + 1,
                        $track3 => $track3 * 10 + 1,
                    ],
                    'hero_id' => $heroId
                ];
            $heroes[] = $heroId;
            Auth::user()->heroes = $heroes;
            return Auth::user()->save();
        }
        return false;
    }


    public function answer(array $params): array
    {
        $result = [
            'status' => false,
            'msg'    => 'Câu trả lời chưa chính xác',
            'point'  => 0,
            'record' => null,
        ];
        try {
            /** @var Record $record */
            $record = Auth::user()->currentRecord($params['track_id']);
            if (!empty($record->point)) {
                return [
                    'status' => false,
                    'msg'    => 'Bạn đã trả lời đúng trong lần trước đó. Vui lòng chọn câu hỏi tiếp theo',
                    'point'  => $record->point,
                ];
            }
            if (count(Auth::user()->heroes) == 1 && $record->times < 2) {
                if (!empty($params['correct'])) {
                    $record->point = empty($params['count']) ? 1 : 0.5;
                    $record->times = empty($params['count']) ? 1 : 2;
                }
                $record->answer = ['correct' => !empty($params['correct'])];
            }
            $record->save();
            History::create(array_merge(
                                $record->toArray(),
                                [
                                    'answer' => ['correct' => !empty($params['correct'])],
                                ]
                            ));
            $result['record'] = $record;
        } catch (Exception $exception) {
            $result['msg'] = $exception->getMessage();
        }
        return $result;
    }

    public function nextQuestion(int $trackId): bool
    {
        $currentQuestion = Auth::user()->currentQuestion($trackId);
        $nextId = $currentQuestion->getKey() + 1;
        $nextQuestion = Question::getInstance($nextId);
        $state = Auth::user()->state;
        if ($nextQuestion) {
            $state['tracks'][$trackId] = $nextId;
            Auth::user()->state = $state;
            return Auth::user()->save();
        } else {
            return false;
        }
    }
}