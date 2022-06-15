<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\PlayerModel;
use app\models\UserPlayerModel;
use Dotenv\Util\Regex;

class PlayerController extends Controller
{
    public function players(Request $request)
    {
        return $this->render('players');
    }

    public function playerDetails(Request $request)
    {
        return $this->render('playerDetails');
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
                if ($user_player){
                    echo "seccuss";
                    exit;
                }
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