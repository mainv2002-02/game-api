<?php

namespace App\Http\Controllers;

use App\Http\Requests\BaseRequest;
use App\Logic\BaseLogic;
use App\Logic\GameLogic;
use App\Models\Hero;
use BeyondCode\LaravelWebSockets\Apps\AppProvider;
use Illuminate\Http\Request;
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

    public function index(BaseRequest $request, int $heroId): View
    {
        $params = $request->all();
//        $heroId = $params['heroId'];
//        if (empty($params['heroId'])) {
//            abort(403);
//        }
        $this->logic->initHero($heroId);
        /** @var Hero $heroInstance */
        $heroInstance = Hero::getInstance($heroId);
        $tracks = $heroInstance->getTracks();

        return view('home.index')
            ->with('tracks', $tracks);
    }

    public function gift(): View
    {
        return view('home.gift');
    }

    public function gift2(): View
    {
        return view('home.gift2');
    }

    public function chat(Request $request, AppProvider $apps)
    {
        return view('home.dashboard')
            ->with('apps', [])
            ->with('port', config('websockets.dashboard.port', 6001));
    }
}
