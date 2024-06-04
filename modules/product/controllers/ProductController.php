<?php

namespace app\modules\product\controllers;

use yii\rest\ActiveController;

/**
 * Default controller for the `product` module
 */
class ProductController extends ActiveController{
    public $modelClass = \app\models\Product::class;

    public function behaviors(){
        $behaviors = parent::behaviors();
        $behaviors["authenticator"] = [
            
            // Bearar Token Authentication
            // "class" => \yii\filters\auth\HttpBearerAuth::class,

            // Basic HTTP Authentication
            // "class"=> \yii\filters\auth\HttpBasicAuth::class,
            
            // QueryParams Authentication
            // "class"=> \yii\filters\auth\QueryParamAuth::class,
            // "tokenParam"=> 'API_KEY'

            // Composite Authentication
            // "class"=> \yii\filters\auth\CompositeAuth::class,
            // "authMethods"=> [
            //     \yii\filters\auth\HttpBasicAuth::class,
            //     //\yii\filters\auth\HttpBearerAuth::class,
            //     [
            //         "class"=> \yii\filters\auth\QueryParamAuth::class,
            //         "tokenParam"=> 'mahim',
            //     ]
            // ]

            // Exclude endpoint authentication using Bearar Token Authentication
            // "class" => \yii\filters\auth\HttpBearerAuth::class,
            // "except"=> ['test'],

            // Optional endpoint authentication using Bearar Token Authentication
            // "class" => \yii\filters\auth\HttpBearerAuth::class,
            // "optional" => ['optional-test']

            // Specific action authentication using Bearar Token Authentication
            // "class" => \yii\filters\auth\HttpBearerAuth::class,
            // "only"=> ['test']

            // "class"=> \yii\filters\auth\CompositeAuth::className(),
            // "authMethods"=> [
            //     [
            //         "class"=> \yii\filters\auth\HttpBasicAuth::className(),
            //         "only"=> ['test'],
            //     ],
            //     [
            //         'class'=> \yii\filters\auth\QueryParamAuth::className(),
            //         'tokenParam' => 'mahim',
            //         'only' => ['optional-test'],
            //     ]
            // ],
        ];
        return $behaviors;
    }


    public function actionTest(){
        return ['message' => 'Hi Test Action'];
    }

    public function actionOptionalTest(){
        return ['message' => 'Hi Optional Action'];
    }
}
