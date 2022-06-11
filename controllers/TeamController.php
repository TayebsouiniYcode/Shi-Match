<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class TeamController extends Controller
{
    public function details(Request $request) 
    {
        return $this->render('teamDetails'); 
    }

    public function create(Request $request)
    {
        return $this->render('createTeam');
    }
}