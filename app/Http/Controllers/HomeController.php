<?php

namespace App\Http\Controllers;

use App\Logic\BaseLogic;
use App\Logic\GameLogic;
use App\Models\User;
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

    public function index(int $heroId): View
    {
        $this->logic->setHero($heroId);
        return view('home.index');
    }

    public function gift(): View
    {
        return view('home.gift');
    }

    public function gift2(): View
    {
        return view('home.gift2');
    }
}
