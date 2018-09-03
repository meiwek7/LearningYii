<?php

namespace app\controllers;

use yii\base\Controller;



class AppController extends Controller{
    
    
    public function debug($variable){
        
        echo print_r($variable);
    }
    
}