<?php

namespace app\models;

use yii\db\ActiveRecord;

class Workbook extends ActiveRecord{
    
    public static function tableName(){
        
        return 'work';
    }
    
}