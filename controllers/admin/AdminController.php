<?php
namespace app\controllers\admin;


use app\controllers\AppController;




class AdminController extends AppController
{
    
    public function actionIndex(){
        
        
        
        return $this->render('adminview');
    }
    
}
