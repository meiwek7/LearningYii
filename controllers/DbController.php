<?php


namespace app\controllers;

use yii\web\Controller;
use app\models\Customer;

class DbController extends Controller{
    
    
    public function actionSelectCustomers(){
        
        $customers=null;
        //$customers = Customer::find()->all(); //select * from customers;
        
        $customers_array = Customer::find()->asArray()->all();
        
        //$customers = [class Customer, class Customer,...]
        
        return $this->render('customers',['customers_var'=>$customers,'customers_array'=>$customers_array]);
    }
    
}