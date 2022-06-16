<?php

namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\TeamModel;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $team = new TeamModel();
        $team->selectAll();
        $teams = $team->dataList;
        return $this->render('teams', [
            'teams' => $teams
        ]);
    }

    public function details(Request $request) 
    {
        $teamId = $_GET['id'];
        $team = new TeamModel();
        $team->select($teamId);
        $team->loadData($team->dataList);
        $team->dataList = null;
        return $this->render('teamDetails', [
            'team' => $team
        ]); 
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
            $teamId =  $_GET['id'];
            $team->select($teamId);
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

    public function destroy(Request $request){
        $teamId = $_GET['id'];

        $team = new TeamModel();
        $team->delete($teamId);

        return $this->index($request);
    }
}