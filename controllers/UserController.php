<?php

namespace app\controllers;

use Yii;
use yii\rest\ActiveController;
use app\models\User;
use app\models\SignupForm;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';

    // public function actions(){
    //     $actions = parent::actions();
    //     unset($actions['create']);
    //     return $actions;
    // }
    public function actions()
    {
        $actions = parent::actions();
        unset($actions['create']); // Override create action
        return $actions;
    }


    public function actionCreate()
    {
        $model = new $this->modelClass;
        //return $model->load(Yii::$app->request->getBodyParams(),'');
        if ($model->load(Yii::$app->request->getBodyParams(),'') && $model->save()) {
            return ['status' => 'success', 'data' => $model];
        }
        else{
            return ['status'=> 'error','errors'=> $model->errors];
        }
    }

    public function actionLogin()
    {
        $params = Yii::$app->request->post();
        //return $params;
        $user = User::findByUsername($params['username']);

        if ($user && $user->validatePassword($params['password'])) {
            return ['status' => 'success', 'data' => $user];
        } else {
            return ['status' => 'error', 'message' => 'Invalid username or password'];
        }
    }
}