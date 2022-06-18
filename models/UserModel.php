<?php

namespace app\models;
use PDO;
use app\core\DbModel;
use app\models\TeamModel;

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
    //team infos
    public ?TeamModel $team;


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

    public function selectTeam(int $userId)
    {
        // $statement = self::prepare("SELECT DISTINCT t.id, t.name 
        //             FROM teams t, player_infos p, user_player u_p, users u 
        //             WHERE u_p.fk_user = $userId 
        //             AND u_p.fk_player = p.id 
        //             AND p.fk_team = t.id;
        // ");
        $statement = self::prepare("SELECT DISTINCT t.id, t.name 
                                FROM teams t
                                WHERE t.created_by = $userId;
        ");
        
        $statement->execute();
        $this->team->dataList = $statement->fetch(PDO::FETCH_OBJ);
        if ($this->team->dataList) {
            return $this->team->dataList;
        }
        return ['team' => 'not found'];
    }
    public function loadTeam(): void
    {
        $this->team = new TeamModel();
        $this->team->loadData($this->selectTeam($_SESSION['id']));
    }

}