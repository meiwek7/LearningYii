<?php
namespace app\controllers;

use Yii;




class MyController extends AppController
{
    
    public function beforeAction($action){
        
        /*
        echo '<pre>'; 
        print_r($action);
        echo '</pre>';
        */
        if ($action->id='increment-post'){
            
            $_POST['txt_value']=1000000;
        }
        
        return parent::beforeAction($action);
    }
    
    
    
    public function actionMyAction($id=null, $age=null){ // my/my-action
        
        $names = ['Bob','Boba'];
        
        $key1='value1';
        $key2='value2';
        
        //$this->debug($names);
        
        $this->layout='simplelayout';
        
        return $this->render('myview',compact('names','key1','key2','id','age')); // compact('names','key1','key2') = ['names'=>$names,'key1'=>$key1,'key2'=>$key2]
    }
    
    
    public function actionIncrementGet(){
        
      $txt_value = $_GET['txt_value'];
        
      return 'Get: '. ($txt_value+1);
    }
    
    
    public function actionIncrementPost(){
        
        
        if (Yii::$app->request->isAjax){
         
            //$txt_value = $_POST['txt_valuea']; error
            
            //$txt_value=Yii::$app->request->post('txt_valuea'); null
            
            $txt_value=Yii::$app->request->post('txt_value');
            
            
            
            
            return 'Post: '.($txt_value+1);
        }
        else 
            return 'not allowed operation'; //TODO 404 page
        
        
    }
    
}

