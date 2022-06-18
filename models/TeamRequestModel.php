<?php

namespace app\models;
use PDO;
use app\core\DbModel;

class TeamRequestModel extends DbModel
{
    public int $id;
    public int $fk_user;
    public int $fk_team;
    public string $status = 'en attente';

    
    public function __construct()
    {

    }

    public function createRequest($fk_user, $fk_team)
    {
        $this->fk_team = $fk_team;
        $this->fk_user = $fk_user;
        $this->save();
        return true;
    }

    public function selectRequestByTeamId($teamId)
    {
        $tableName = $this->tableName();
        $statement = self::prepare("SELECT * FROM $tableName where fk_team = $teamId");
        $statement->execute();
        $this->dataList = $statement->fetchAll(PDO::FETCH_OBJ);
        return true;
    }

    public function tableName(): string
    {
        return 'team_request';
    }

    // public function updateUser()
    // {
    //     return parent::update();
    // }

    // public function selectAll()
    // {
    //     return parent::selectAll();
    // }

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
            'fk_user',
            'fk_team',
        ];
    }

}