<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SharedController extends Controller
{
    public function teams(Request $request)
    {
        return $this->render('teams'); 
    }
}