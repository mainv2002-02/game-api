<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseRequest;
use App\Logic\BaseLogic;
use App\Logic\GameLogic;
use App\Models\Hero;
use App\Models\Track;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class GameController extends Controller
{
    protected BaseLogic $logic;
    protected ?Hero $heroInstance;

    public function __construct()
    {
        parent::__construct();
        $this->heroInstance = Hero::getInstance(Auth::user()->hero_id);
        $this->logic = GameLogic::getInstance();
    }

    public function trackPlaying(BaseRequest $request, int $trackId): View
    {
        $trackInstance = Track::getInstance($trackId);
        if ($trackInstance->hero_id != $this->heroInstance->id) {
            abort(403);
        }

        if ($request->getMethod() == 'POST') {
            $this->logic->nextQuestion($trackId);
        }
        $currentQuestion = Auth::user()->currentQuestion($trackId);

        return view($currentQuestion->template)
            ->with('track', $trackInstance)
            ->with('question', $currentQuestion);
    }

    public function answer(BaseRequest $request): JsonResponse
    {
        $result = $this->logic->answer($request->all());
        return response()->json($result);
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

    public function track2nv15(): View
    {
        return view('game.track2.nv1.question5');
    }

    public function track2nv16(): View
    {
        return view('game.track2.nv1.question6');
    }

    public function track2nv17(): View
    {
        return view('game.track2.nv1.question7');
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
