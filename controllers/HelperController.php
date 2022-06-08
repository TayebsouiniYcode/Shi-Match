<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;
use app\models\LoginModel;

class HelperController extends Controller
{
    public function index(Request $request)
    {
        $this->setLayout('landing');
        return $this->render('index');
    }

    public function welcomeYoucode(Request $request)
    {
        return $this->render('welcomeYoucode');
    }

    public function login(Request $request)
    {
        // $login = new LoginModel();
        // if ($request->isPost()) {
        //     $login->loadData($request->getBody());
        //     if ($login->validate() && $login->login()) {
        //         Application::$app->session->sefFlash('success', 'Welcome');
        //         Application::$app->response->redirect('/student');
        //         return;
        //     }
        // }
        // $this->setLayout('auth');
        // return $this->render('login', [
        //     'model' => $login
        // ]);
    }

    public function register(Request $request)
    {
        // $user = new User();
        // if($request->isPost())
        // {
        //     $user->loadData($request->getBody());

        //     if ($user->validate() && $user->save()){
        //         Application::$app->session->sefFlash('success', 'Thanks for registreing');
        //         Application::$app->response->redirect('/');
        //     }

        //     return $this->render('register', [
        //         'model' => $user
        //     ]);
        // }
        // $this->setLayout('auth');

        // return $this->render('register', [
        //     'model' => $user
        // ]);    
    }
}