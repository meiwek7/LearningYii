<?php
namespace app\controllers\admin;


use app\controllers\AppController;




class SiteController extends AppController
{
    
    public function actionIndex(){
        
        
        return $this->render('siteview');
    }
    
}
