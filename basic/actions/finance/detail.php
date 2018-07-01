<?php

namespace app\actions\finance;

use app\models\FinanceDetail;

class detail extends \yii\base\Action {
    
    public function run() {
        
        $rows = FinanceDetail::find()->all();
        $return_data = $this->returnJson($rows,$success);
        return $return_data;
        
    }
    
    public function returnJson($rows){
        //此处处理返回数据
        return json_encode(array('code'=>'0','date'=>$rows));                
    }


}
