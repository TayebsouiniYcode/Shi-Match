<?php

namespace app\controllers;
use app\core\Request;
use Dotenv\Util\Regex;
use app\core\Controller;
use app\core\Application;
use app\models\UserModel;
use app\models\PlayerModel;
use app\models\TeamModel;
use app\models\UserPlayerModel;

class PlayerController extends Controller
{
    public function players(Request $request)
    {
        if ($request->isGet())
        {
            $users = new UserModel();
            $users->selectAll();
            return $this->render('players', [
                'users' => $users
            ]);
        }

    }

    public function playerDetails(Request $request)
    {
        if ($request->isGet())
        {
            $userId = $_GET['id'];
            $user = new UserModel();
            $user->select($userId);
            $user->loadData($user->dataList);

            $player = new PlayerModel();
            $player->getPlayerByUserId($userId);
            if ($player->dataList){
                $player->loadData($player->dataList);
            }

            $team = new TeamModel();
            $team->select($player->fk_team);
            if ($team->dataList) {
                $team->loadData($team->dataList);
            }
            

            return $this->render('playerDetails', [
                'user' => $user,
                'player' => $player,
                'team' => $team
            ]);
        }
        
    }

    public function addPlayer(Request $request)
    {
        $player = new PlayerModel();
        if ($request->isGet()){
            return $this->render('addPlayer',  [
                'model' => $player
            ]);
        }
        if ($request->isPost()) {
            $player->loadData($request->getBody());
            $playerId = $player->save();
            if ($player->validate() && $playerId) {
                $user_player = new UserPlayerModel($playerId, $_SESSION['id']);
                Application::$app->response->redirect('/players');
                return;
            }
        }
    }

    public function matchs(Request $request)
    {
        return $this->render('matchs');
    }
}