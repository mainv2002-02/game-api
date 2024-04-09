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
}
