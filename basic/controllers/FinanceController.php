<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class FinanceController extends Controller
{

    public function actions(){
        return [
            //列表
            'detail' => [
                'class' => 'app\actions\finance\detail'
            ],
            //新增
            'add' => [
                'class' => 'app\actions\finance\add'
            ]
        ];
    }
    
    
        
    
}
