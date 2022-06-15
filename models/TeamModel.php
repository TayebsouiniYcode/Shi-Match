<?php

namespace app\models;
use app\core\DbModel;

class TeamModel extends DbModel
{
    public int $id;
    public string $name ='';
    public string $quote = '';
    public int $min_age = 0;
    public int $max_age = 0;
    public int $number_max_of_players = 11;
    public string $city = '';
    public string $postale_code = '';


    public function tableName(): string
    {
        return 'teams';
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
            'name', 
            'quote', 
            'min_age', 
            'max_age', 
            'number_max_of_players', 
            'city', 
            'postale_code'];
    }

}