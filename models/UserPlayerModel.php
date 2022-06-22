<?php

namespace app\models;
use app\core\DbModel;

class UserPlayerModel extends DbModel
{
    public int $fk_user;
    public int $fk_player;

    public function __construct(int $playerId, int $userId)
    {
        $this->fk_user = $userId;
        $this->fk_player = $playerId;

        $this->save();

        return true;
    }

    public function tableName(): string
    {
        return 'user_player';
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
        return ['fk_user', 'fk_player'];
    }

}