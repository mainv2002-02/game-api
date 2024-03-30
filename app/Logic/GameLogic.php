<?php

namespace App\Logic;

use App\Models\History;
use App\Models\Question;
use App\Models\Record;
use App\Utilities\GameUtility;
use Exception;
use Illuminate\Support\Arr;
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
            if ($heroId == 3) {
                $track1 = ((rand() % 2) + 1) * 100 + 1;
                Auth::user()->data = [
                    'hero_3' => [
                        'track_1' => $track1,
                        'track_2' => ((rand() % 2) + 1) * 100 + 2,
                        'track_3' => ((rand() % 2) + 1) * 100 + 3,
                    ]
                ];
            } else {
                $track1 = ($heroId == 1) ? 101 : 201;
            }
            Auth::user()->state = [
                'hero_id'     => $heroId,
                'track_id'    => $track1,
                'question_id' => ($track1 == 101) ? 1011 : 2011,
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
            $currentQuestion = Auth::user()->currentQuestion();
            /** @var Record $record */
            $record = Auth::user()->currentRecord();
            if (!empty($record->point)) {
                return [
                    'status' => false,
                    'msg'    => 'Bạn đã trả lời đúng trong lần trước đó. Vui lòng chọn câu hỏi tiếp theo',
                    'point'  => $record->point,
                ];
            }
            $answer = Arr::only($params, 'answer');
            if ($record->times < 2) {
                $diff = array_diff($answer, $currentQuestion->answer ?? []);
                if (empty($diff)) {
                    $point = 2 - $record->times;
                    $result['status'] = true;
                    $result['msg'] = 'Câu trả lời chính xác';
                    $record->point = $point ?? max(0, $point);
                }
                $record->answer = $answer;
                $record->times = $record->times + 1;
            }
            $record->save();
            History::create(array_merge(
                                $record->toArray(),
                                [
                                    'answer' => $answer,
                                ]
                            ));
            $result['record'] = $record;
        } catch (Exception $exception) {
            $result['msg'] = $exception->getMessage();
        }
        return $result;
    }

    public function nextQuestion(): bool
    {
        $state = Auth::user()->state;
        $currentQuestionId = Auth::user()->questionId;
        $nextQuestion = Question::getInstance(++$currentQuestionId);
        if ($nextQuestion) {
            $state['question_id'] = $currentQuestionId;
        } else {
            if ($state['track_id'] % 100 == 3) {
                return false;
            }
            if (Auth::user()->hero_id == 3) {
                $data = Auth::user()->data;
                $state['track_id'] = $data['hero_3']['track_' . (($state['track_id'] % 100) + 1)];
            } else {
                $state['track_id']++;
            }
            $state['question_id'] = $state['track_id'] * 10 + 1;
        }
        Auth::user()->state = $state;
        return Auth::user()->save();
    }
}