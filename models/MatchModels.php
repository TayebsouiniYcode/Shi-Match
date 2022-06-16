<?php

namespace app\models;
use app\core\DbModel;

class MatchModel extends DbModel
{
    public int $id;
    public string $date;
    public int $number_of_goals;
    

    public function tableName(): string
    {
        return 'matchs';
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
            'date',
            'number_of_goals'
        ];
    }

}