<?php

namespace app\models;

use yii;

class FinanceDetail extends yii\db\ActiveRecord
{
    public static function tableName() {
        return '{{finance_detail}}';
    }
    
    
}
