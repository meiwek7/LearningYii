<?php


namespace app\controllers;

use yii\web\Controller;
use app\models\Work;

class DbController extends Controller{
    
    
    public function actionSelectWorkers(){
        
        $workers=null;
        //$customers = Customer::find()->all(); //select * from customers;
        
        $workers_array = Work::find()->asArray()->all();
        
        //$customers = [class Customer, class Customer,...]
        
        return $this->render('customers',['customers_var'=>$workers,'customers_array'=>$workers_array]);
    }
    
}