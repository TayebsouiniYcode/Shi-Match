<?php

namespace app\models;
use app\core\DbModel;

class TeamMatchModel extends DbModel
{
    public int $fk_team;
    public int $fk_match;
    
    public function __construct($fk_team, $fk_match)
    {
        $this->fk_team = $fk_team;
        $this->fk_match = $fk_match;

        $this->save();

        return true;
    }

    public function tableName(): string
    {
        return 'team_match';
    }

    public function selectAll()
    {
        return parent::selectAll();
    }

    public function findOne($where)
    {
        return parent::findOne($where);
    }

    // public function delete($id)
    // {
    //     return parent::delete($id);
    // }

    // public function select($id)
    // {
    //     return parent::select($id);
    // }
    public function count()
    {
        return parent::count();
    }    

    public function save()
    {
        return parent::save();
    }

    public function rules(): array
    {
        return [];
    }

    public function attributes(): array
    {
        return [
            'fk_team',
            'fk_match',
        ];
    }

}