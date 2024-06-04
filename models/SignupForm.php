<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;


class SignupForm extends Model 
{
    public $username;
    public $email;
    public $password;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // [['username', 'email'], 'trim'],
            [['username','email', 'password'],'required'],

            ['username', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This username has already taken.'],
            ['username','string','min' => 4, 'max'=> 255],

            ['email','email'],
            ['email','string','max'=> 255],
            ['email','unique', 'targetClass' => '\app\models\User', 'message'=> 'This email has already taken'],

            ['password', 'string', 'min' => Yii::$app->params['user.passwordMinLenght']],
        ];
    }

    public function singup(){
        if(!$this->validate()){
            return null;
        }
        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->generatePasswordResetToken();
        $user->generateEmailVerificationToken();
        $user->save();
        return true;
    }
   
}
