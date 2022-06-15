<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\TeamModel;

class TeamController extends Controller
{
    public function details(Request $request) 
    {
        return $this->render('teamDetails'); 
    }

    public function create(Request $request)
    {
        $team = new TeamModel();
        if ($request->isGet())
        {
            return $this->render('addTeam', [
                'model' => $team
            ]);
        }

        if ($request->isPost())
        {
            $team->loadData($request->getBody());
            if ($team->validate() && $team->save()) {
                Application::$app->response->redirect('/teams');
                return;
            }
        }
    }

    public function edit(Request $request)
    {
        $team = new TeamModel();

        if ($request->isGet())
        {
            $team->select(4);
            $team->loadData($team->dataList);
            $team->dataList = null;
            return $this->render('addTeam', [
                'model' => $team
            ]);
        }

        if ($request->isPost())
        {
            $team->loadData($request->getBody());
            $team->update($team->id);
            return $this->render('addTeam', [
                'model' => $team
            ]);
        }
    }
}