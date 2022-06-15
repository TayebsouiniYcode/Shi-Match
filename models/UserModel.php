<?php

namespace app\models;
use app\core\DbModel;

class UserModel extends DbModel
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;

    public int $id;
    public string $firstname = '';
    public string $lastname = '';
    public int $age = 0;
    public string $email =  '';
    public string $phone = '';
    public int $status = self::STATUS_INACTIVE;
    public string $password = '';
    public string $confirmPassword = '';
    public string $role = '';
    public int $fk_role = 2;
    public int $fk_address = 1;
    //address
    public string $country = '';
    public string $city= '';
    public string $postale_code = '';
    public string $address = '';


    public function tableName(): string
    {
        return 'users';
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
        // $this->status = self::STATUS_INACTIVE;
        
        $address = new AddressModel();
        $address->loadData([
            'address' => $this->address, 
            'city' => $this->city, 
            'country' => $this->country,
            'postale_code' => $this->postale_code
        ]);
        $this->fk_address = $address->save();

        // echo "<pre>";
        // var_dump($address);
        // echo "</pre>";
        // echo '<br>';
        // echo $this->fk_address;
        // exit;

        return parent::save();
    }

    public function rules(): array
    {
        return [
            'firstname' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [
                self::RULE_UNIQUE, 'class' => self::class
            ]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'confirmPassword' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']]
        ];
    }

    public function attributes(): array
    {
        return ['firstname', 'lastname', 'email', 'password', 'status', 'age', 'phone', 'fk_role', 'fk_address'];
    }

}