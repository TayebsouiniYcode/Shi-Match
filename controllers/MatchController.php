<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\TeamModel;

class MatchController extends Controller
{
    public function create(Request $request)
    {
        if ($request->isGet()){
            return $this->render('matchRequest', [
                'team_one_id' => $_GET['id'],
                'team_tow_id' => $_GET['idVs']
            ]);
        }
    }
}