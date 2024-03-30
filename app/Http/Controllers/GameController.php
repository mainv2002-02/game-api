<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseRequest;
use App\Logic\BaseLogic;
use App\Logic\GameLogic;
use App\Models\Hero;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Lumen\Http\Redirector;

class GameController extends Controller
{
    protected BaseLogic $logic;

    public function __construct()
    {
        parent::__construct();
        $this->logic = GameLogic::getInstance();
    }

    public function question(BaseRequest $request): View|Redirector|RedirectResponse
    {
        if (empty(Auth::user()->question_id)) {
            return redirect('/character');
        }
        $currentQuestion = Auth::user()->currentQuestion();
        $currentRecord = Auth::user()->currentRecord();
        $trackInstance = $currentQuestion->track;
        $heroInstance = Hero::getInstance(Auth::user()->hero_id);
        $result = [
            'canAnswer' => true,
            'msg'       => '',
        ];
        if ($request->getMethod() == 'POST') {
            $params = $request->all();
            if (!empty($params['answer'])) {
                $result = $this->logic->answer($params);
            } else if (!empty($params['next_question'])) {
                $nextQuestion = $this->logic->nextQuestion();
                if (!$nextQuestion) {
                    return redirect('game/records');
                }
                return redirect('/game/question');
            }

        }
        $result['canAnswer'] = $currentRecord->point == 0 && $currentRecord->times < 2;
        if (!$result['canAnswer'] && empty($result['msg'])) {
            $result['msg'] = 'Câu hỏi đã hoàn thành!';
        }

        return view('game.question-detail')
            ->with('result', $result)
            ->with('track', $trackInstance)
            ->with('hero', $heroInstance)
            ->with('question', $currentQuestion);
    }

    public function getRecords()
    {

        return view('game.record')
            ->with('records', Auth::user()->getRecords());
    }
}