<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\LoginModel;
use app\models\UserModel;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $login = new LoginModel();
        if ($request->isPost()) {
            $login->loadData($request->getBody());
            if ($login->validate() && $login->login()) {
                session_start();
                $_SESSION['email'] = $login->email;
                Application::$app->session->sefFlash('success', 'Welcome');
                Application::$app->response->redirect('/dashboard');
                return;
            }
        }
        $this->setLayout('auth');
        return $this->render('login', [
            'model' => $login
        ]);
    }

    public function signup(Request $request)
    {
        $user = new UserModel();
        if($request->isPost())
        {
            $user->loadData($request->getBody());

            if ($user->validate() && $user->save()){
                Application::$app->session->sefFlash('success', 'Thanks for registreing');
                Application::$app->response->redirect('/');
            }

            return $this->render('signup', [
                'model' => $user
            ]);
        }
        $this->setLayout('auth');

        return $this->render('signup', [
            'model' => $user
        ]);    
    }

    public function logout(Request $request)
    {
        Application::$app->logout();
        Response::staticRedirect('/');
    }
}