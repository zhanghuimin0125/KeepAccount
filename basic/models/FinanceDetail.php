<?php

namespace app\models;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public static function tableName() {
        return '{{finance_detail}}';
    }
    
    
}
