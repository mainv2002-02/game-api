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

    public function getQuestion(): View
    {
        $currentQuestion = $this->logic->getCurrentQuestion();
        if (!$currentQuestion) {
            $records = Auth::user()->getRecords();
            return view('game.record')
                ->with('records', $records);
        } else {
            $trackInstance = $currentQuestion->track;
            $heroInstance = Hero::getInstance(Auth::user()->hero_id);

            return view('game.question-detail')
                ->with('track', $trackInstance)
                ->with('hero', $heroInstance)
                ->with('question', $currentQuestion);
        }
    }

    public function postAnswer(BaseRequest $request): RedirectResponse|Redirector
    {
        $record = $this->logic->answer($_POST);
//        Session::flash('message', $record->point ? "Chuc mung ban duoc {$record->point} diem" : 'Sai cau tra loi');
//        Session::flash('alert-class', 'alert-danger');
        return redirect('/game/question');
    }
}