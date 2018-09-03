<?php

use yii\helpers\Html;
use yii\web\View;

echo 'my view';


echo "<br/> key1 =$key1  and key2 = $key2";

foreach ($names as $name)
    echo "<br/>$name";

echo "<br/> id = $id and age = $age";    


?>




<p></p>

<input id = 'txt_value' type='text' style="width: 300px"/>

<button class='btn_submit_value_get'>Submit GET</button>

<button class='btn_submit_value_post'>Submit POST</button>

<div id='result'></div>


<?php  //echo Html::jsFile('@web/js/script.js'); ?> <!-- not working ( -->

<?php $this->registerJsFile('@web/js/script.js',['position'=>View::POS_HEAD,'depends'=>'yii\web\YiiAsset'])?> <!-- [\yii\web\JqueryAsset::className()] -->


<?php echo $this->registerJs("alert('Hello 2');")?>


<?php

if (Yii::$app->user->isGuest)
{
    $script = "alert('U are not user!');";
}
else
{
$script = <<<JS
    
$('.btn_submit_value_post').click(function(){

    var txt_value = $('#txt_value').val();
    
    
    alert(txt_value);
    
});

JS;

}


$this->registerJs($script);

?>

