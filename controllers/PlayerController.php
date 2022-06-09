<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use Dotenv\Util\Regex;

class PlayerController extends Controller
{
    public function players(Request $request)
    {
        return $this->render('players');
    }

    public function playerDetails(Request $request)
    {
        return $this->render('playerDetails');
    }

    public function matchs(Request $request)
    {
        return $this->render('matchs');
    }
}