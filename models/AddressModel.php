<?php

namespace app\models;
use app\core\DbModel;

class AddressModel extends DbModel
{
    public int $id;
    public string $country = '';
    public string $city= '';
    public string $postale_code = '';
    public string $address = '';


    public function tableName(): string
    {
        return 'addresses';
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
        return [
            
        ];
    }

    public function attributes(): array
    {
        return ['address', 'city', 'country', 'postale_code'];
    }

}