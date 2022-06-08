<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class PlayerController extends Controller
{
    public function players(Request $request)
    {
        return $this->render('players');
    }
}