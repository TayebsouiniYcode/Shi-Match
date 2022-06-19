<?php

namespace app\models;
use PDO;
use app\core\DbModel;

class PlayerModel extends DbModel
{
    public int $id;
    public string $post = '';
    public string $favorite_foot = '';
    public string $favorite_number = '';
    public int $height = 0;
    public int $weight = 0;
    public int $fk_team = 0;

    public function tableName(): string
    {
        return 'player_infos';
    }

    public function selectAll()
    {
        return parent::selectAll();
    }

    public function findOne($where)
    {
        return parent::findOne($where);
    }

    public function delete($id)
    {
        return parent::delete($id);
    }

    public function select($id)
    {
        return parent::select($id);
    }
    
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
        return ['post', 'favorite_foot', 'favorite_number', 'height', 'weight', 'fk_team'];
    }

    public function getPlayerByUserId($userId)
    {
        $statement = self::prepare("SELECT * FROM player_infos p_i, user_player u_p
                                    WHERE u_p.fk_user = $userId    
                                    AND u_p.fk_player = p_i.id
        ");
        
        $statement->execute();
        $this->dataList = $statement->fetch(PDO::FETCH_OBJ);
        if ($this->dataList) {
            return $this->dataList;
        }
        return ['player' => 'player not found'];
    }

}