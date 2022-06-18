<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\MatchModel;
use app\models\TeamMatchModel;
use app\models\TeamModel;

class MatchController extends Controller
{
    public function create(Request $request)
    {
        if ($request->isGet()){
            $teamOneId = $_GET['id'];
            $team_1 = new TeamModel();
            $team_1->select($teamOneId);
            $team_1->loadData($team_1->dataList);

            $teamTwoId = $_GET['idVs'];
            $team_2 = new TeamModel();
            $team_2->select($teamTwoId);
            $team_2->loadData($team_2->dataList);

            return $this->render('matchRequest', [
                'team_1' => $team_1,
                'team_2' => $team_2
            ]);
        }

        if ($request->isPost())
        {
            $form = $request->getBody();
            $match = new MatchModel();
            $match->date = $form['date'];
            $match->time = $form['time'];
            $idMatch = $match->save();
            new TeamMatchModel($form['teamOneId'], $idMatch);
            new TeamMatchModel($form['teamTwoId'], $idMatch);

            Application::$app->response->redirect('/teamDetails?id='. $form['teamTwoId']);
            return;
        }
    }
}