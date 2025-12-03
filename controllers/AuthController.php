<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\core\Response;
use app\models\LoginModel;
use app\models\RoleModel;
use app\models\UserModel;
use app\services\AuthService;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $login = new LoginModel();
        try {
            if ($request->isPost()) {
                $login->loadData($request->getBody());
                $user = new UserModel();
                $user = $login->login();
                
                //TODO Validation
                if ($login->login()) {

                    $role = new RoleModel();
                    $role->select($user->fk_role);
                    $role->loadData($role->dataList);
                    $role->dataList = null;
                    $user->role_name = $role->role_name;

                    $u = new UserModel();
                    $u->select($user->id);
                    $u->loadTeam();
                    

                    //session_start();
                    $_SESSION['email'] = $login->email;
                    $_SESSION['id'] = $user->id;
                    $_SESSION['password'] = $user->password;
                    $_SESSION['firstname'] = $user->firstname;
                    $_SESSION['lastname'] = $user->lastname;
                    $_SESSION['role'] = $user->role_name;
                    $_SESSION['teamId'] = $u->team->id ?? -1;


                    if ($user->role_name === 'ROLE_ADMIN'){
                        Application::$app->response->redirect('/dashboard');
                        return;
                    }

                    if ($user->role_name === 'ROLE_USER'){
                        Application::$app->response->redirect('/dashboard/player');
                        return;
                    }
                }
            }
        }catch (Exception $e) {
            var_dump($e->getMessage());
            die();
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
            if ($user->save()){
                Application::$app->session->sefFlash('success', 'Thanks for registreing');

                $role = new RoleModel();
                $role->select($user->fk_role);
                $role->loadData($role->dataList);

                if ($role->role_name === 'ROLE_ADMIN'){
                    Application::$app->response->redirect('/dashboard');
                    return;
                }

                if ($role->role_name === 'ROLE_USER'){
                    Application::$app->response->redirect('/dashboard/player');
                    return;
                }

                Application::$app->response->redirect('/');
            }

            $this->setLayout('auth');
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