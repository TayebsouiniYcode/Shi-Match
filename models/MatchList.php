<?php

namespace app\models;

use app\models\MatchModel;
use app\models\MatchModel as ModelsMatchModel;

class MatchList
{
    public TeamModel $team_1;
    public TeamModel $team_2;
    public MatchModel $match;

    public function __construct($id)
    {
        
    }

    // public function attributes(): array
    // {
    //     return [
    //         'date',
    //         'number_of_goals',
    //         'status',
    //         'time'
    //     ];
    // }

}