<?php

namespace app\controllers;
use app\core\Request;
use app\core\Controller;
use app\models\TeamModel;
use app\models\UserModel;
use app\models\MatchModel;
use app\models\PlayerModel;
use app\controllers\UserController;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $role = $_SESSION['role'] ?? '';
        if ($role === 'ROLE_ADMIN')
        {
            $team = new TeamModel();
            $number_of_teams = $team->count();

            $player = new PlayerModel();
            $number_of_players = $player->count();

            $match = new MatchModel();
            $number_of_matchs = $match->count();

            // $player->selectAll();
            // $players = $player->dataList;
            $user = new UserModel();
            $user->selectAll();

            return $this->render('dashboard', [
                "number_of_teams" => $number_of_teams,
                "number_of_players" => $number_of_players,
                "number_of_matchs" => $number_of_matchs,
                'users' => $user
            ]); 
        }
        if ($role === 'user') 
        {
            $userController = new UserController();
            return $userController->profile($request);
            // $user = new UserModel();
            // $user->select($_SESSION['id']);
            // $user->loadData($user->dataList);
            // $user->dataList = null;
            // return $this->render('profile', [
            //     'user' => $user
            // ]);
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

    public function dashboardFindPlayer() {
        return $this->render('dashboard/find-players', []); 
    }

    public function myMatches() {
        return $this->render('dashboard/my-matches', []); 
    }
}