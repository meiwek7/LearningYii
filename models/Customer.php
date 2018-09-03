<?php

namespace app\models;

use yii\db\ActiveRecord;
//use app\models\Woorkbook;

class Customer extends ActiveRecord{
    
    
    public function getWorks(){
        
        return  $this->hasMany(Workbook::className(), ['customer_fk'=>'id']);
    }
}