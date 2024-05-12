<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseRequest;
use App\Logic\BaseLogic;
use App\Logic\GameLogic;
use App\Models\Hero;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    protected BaseLogic $logic;

    public function __construct()
    {
        parent::__construct();
        $this->logic = GameLogic::getInstance();
    }

    public function indexHome(): View
    {
        return view('home.index_home');
    }

    public function indexKickoff(): View
    {
        return view('home.index_kickoff');
    }

    public function indexCharacter(): View
    {
        return view('home.index_character');
    }

    public function index(BaseRequest $request): mixed
    {
        if ($request->getMethod() == 'POST') {
            $params = $request->all();
            $heroId = $params['heroId'];
            if (empty($params['heroId'])) {
                abort(403);
            }
            $result = $this->logic->initHero($heroId);
            return response()->json(data: ['msg' => $result ? 'Success' : 'You can not change your hero! Please finish all questions!!']);
        }
        $heroId = Auth::user()->hero_id;
        /** @var Hero $heroInstance */
        $heroInstance = Hero::getInstance($heroId);
        $tracks = $heroInstance->getTracks();

        return view('home.index')
            ->with('tracks', $tracks)
            ->with('host', env('APP_URL'));
    }

    public function gift(): View
    {
        return view('home.gift');
    }

    public function gift2(): View
    {
        return view('home.gift2');
    }

    public function bet(): View
    {
        return view('home.bet');
    }
}
