<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class UserController extends Controller
{
    public function profile(Request $request)
    {
        return $this->render('profile');
    }
}