<?php

namespace app\modules\product\controllers;

use yii\rest\ActiveController;

/**
 * Default controller for the `product` module
 */
class ProductController extends ActiveController{
    public $modelClass = \app\models\Product::class;
}
