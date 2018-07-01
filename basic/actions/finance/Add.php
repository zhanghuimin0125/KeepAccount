<?php

namespace app\actions\finance;

use yii;
use app\models\FinanceDetail;

class add extends yii\base\Action {
    
    public function run() {
        $post = Yii::$app->request->post();
        
        $valid_post = $this->checkPost($post);
        
        $model = new FinanceDetail();
        $model->finance_name = $valid_post['fiance_name'];
        $model->finance_money = $valid_post['fiance_money'];
        $model->finance_time = $valid_post['create_time'];
        
        if($model->save(false)){
            return json_encode(array('code'=>'0','isSuccess'=>true));
        }
           
    }
    
    private function checkPost($post){
        //此处需要验证一些参数，如金额是否是数字等，暂省
        return $post;
    }


}
