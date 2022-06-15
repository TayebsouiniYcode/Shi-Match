<?php

namespace app\controllers;
use app\core\Controller;
use app\core\Request;
use app\models\UserModel;

class UserController extends Controller
{
    public function profile(Request $request)
    {
        $user = new UserModel();
        $user->select($_SESSION['id']);
        $user->loadData($user->dataList);

        if($request->isGet()){
            return $this->render('profile', [
                'model' => $user
            ]);
        }

        if($request->isPost())
        {
            $user = new UserModel();
            $user->loadData($request->getBody());
            $user->password = $_SESSION['password'];
            $user->update($user->id);
            return $this->render('profile', [
                'model' => $user
            ]);
        }
    }

    public function editPassword(Request $request)
    {
        return $this->render('editPassword');
    }
}