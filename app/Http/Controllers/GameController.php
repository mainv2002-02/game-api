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

    public function track2(): View
    {
        return view('home.gift');
    }

    public function track1nv11(): View
    {
        return view('game.track1.nv1.question1');
    }

    public function track1nv12(): View
    {
        return view('game.track1.nv1.question2');
    }

    public function track1nv13(): View
    {
        return view('game.track1.nv1.question3');
    }

    public function track1nv14(): View
    {
        return view('game.track1.nv1.question4');
    }

    public function track1nv21(): View
    {
        return view('game.track1.nv2.question1');
    }

    public function track1nv22(): View
    {
        return view('game.track1.nv2.question2');
    }

    public function track1nv23(): View
    {
        return view('game.track1.nv2.question3');
    }

    public function track1nv24(): View
    {
        return view('game.track1.nv2.question4');
    }

    public function track2nv11(): View
    {
        return view('game.track2.nv1.question1');
    }

    public function track2nv12(): View
    {
        return view('game.track2.nv1.question2');
    }

    public function track2nv13(): View
    {
        return view('game.track2.nv1.question3');
    }

    public function track2nv14(): View
    {
        return view('game.track2.nv1.question4');
    }

    public function track2nv21(): View
    {
        return view('game.track2.nv2.question1');
    }

    public function track2nv22(): View
    {
        return view('game.track2.nv2.question2');
    }

    public function track2nv23(): View
    {
        return view('game.track2.nv2.question3');
    }

    public function track2nv24(): View
    {
        return view('game.track2.nv2.question4');
    }

    public function track3nv11(): View
    {
        return view('game.track3.nv1.question1');
    }

    public function track3nv12(): View
    {
        return view('game.track3.nv1.question2');
    }

    public function track3nv13(): View
    {
        return view('game.track3.nv1.question3');
    }

    public function track3nv14(): View
    {
        return view('game.track3.nv1.question4');
    }

    public function track3nv15(): View
    {
        return view('game.track3.nv1.question5');
    }

    public function track3nv16(): View
    {
        return view('game.track3.nv1.question6');
    }

    public function track3nv21(): View
    {
        return view('game.track3.nv2.question1');
    }

    public function track3nv22(): View
    {
        return view('game.track3.nv2.question2');
    }

    public function track3nv23(): View
    {
        return view('game.track3.nv2.question3');
    }

    public function track3nv24(): View
    {
        return view('game.track3.nv2.question4');
    }

    public function track3nv25(): View
    {
        return view('game.track3.nv2.question5');
    }
}
