<?php

namespace app\controllers;
use app\core\Request;
use app\core\Controller;
use app\core\Application;
use app\models\UserModel;
use app\models\LoginModel;
use app\models\PlayerModel;
use app\models\TeamModel;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $role = $_SESSION['role'] ?? 'Guest';
        if ($role === 'admin') 
        {
            $team = new TeamModel();
            $number_of_teams = $team->count();

            $player = new PlayerModel();
            $number_of_players = $player->count();

            return $this->render('dashboard', [
                "number_of_teams" => $number_of_teams,
                "number_of_players" => $number_of_players
            ]); 
        }
        if ($role === 'user') 
        {
            $user = new UserModel();
            $user->select($_SESSION['id']);
            $user->loadData($user->dataList);
            $user->dataList = null;
            return $this->render('profile', [
                'model' => $user
            ]);
        }
        if ($role === 'Guest')
        {
            $user = new UserModel();

            $this->setLayout('auth');
            return $this->render('signup', [
                'model' => $user
            ]); 
        }
    }
}