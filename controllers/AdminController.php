<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        return $this->render('dashboard'); 
    }
}