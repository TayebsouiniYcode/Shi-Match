<?php
namespace app\models;
use app\core\Application;
use app\core\Model;

class LoginModel extends Model
{
    public string $email = '';
    public string $password = '';

    public function rules() :array
    {
        return [
            'email' => [self::RULE_REQUIRED],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    public function login()
    {
        $user = new UserModel();
        $user = $user->findOne(['email' => $this->email]);
        if (!$user) {
            $this->addErrorLogin('email', 'User does not exist with this email address');
            return false;
        }
        if ($this->password !== $user->password) {
            $this->addErrorLogin('password', 'Password is incorrect');
            return false;
        }
      $_SESSION['email'] = $this->email;
      $_SESSION['firstname'] = $user->firstname;
      $_SESSION['lastname'] = $user->lastname;
      $_SESSION['id'] = $user->id;
      return true;
    }
}