<?php

namespace app\models;
use app\core\DbModel;

class RoleModel extends DbModel
{
    public int $id;
    public string $role_name = '';
    public string $description = '';
    public int $code = 0;

    public function tableName(): string
    {
        return 'roles';
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
        return ['role_name', 'description', 'code'];
    }

}