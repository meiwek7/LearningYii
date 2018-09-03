<?php


namespace app\controllers;

use yii\web\Controller;
use app\models\Customer;
use app\models\Workbook;

class DbController extends Controller{
    
    
    public function actionSelectCustomers(){
        
        $customers=null;
        //$customers = Customer::find()->all(); //select * from customers;
        
        //$customers_array = Customer::find()->asArray()->all();
        
        
        
        //where --------------------------
        
        //$customers_array = Customer::find()->asArray()->where('id=41')->all();
        //$customers_array = Customer::find()->asArray()->where(['=','id',41])->all();
        //$customers_array = Customer::find()->asArray()->where(['id'=>41])->all();
        
        // a opp b => 'opp', a, b
        //$customers_array = Customer::find()->asArray()->where( ['like','customer_name','b'] )->all();
        
        
        //$customers_array = Customer::find()->asArray()->where( ['>=','id',42] )->all();
        
        
        //LIMIT & order by------------------
        
        //$customers_array = Customer::find()->asArray()->orderBy(['id'=>SORT_DESC])->limit(2)->all();
        
        
        //select by id
        //$customers_array = Customer::findOne(['id'=>42]);
        
        
        
        //unsave code
        //$query="select * from customer where customer_name like '%b%'";
        //$customers_array = Customer::findBySql($query)->all();
        
        
        //vs save code
        
        //$query="select * from customer where customer_name like :search";
        //$customers_array = Customer::findBySql($query,[':search'=>'%b%'])->all();
        
        
        
        //$works = Workbook::find()->asArray()->all();
        $works=null;
        
        //$customers = [class Customer, class Customer,...]
        
        
        
        // select one many
        
        $customers_array = Customer::find()->with('works')->all();
        
        
        return $this->render('customers',['customers_var'=>$customers,'customers_array'=>$customers_array,'works'=>$works]);
    }
    
}