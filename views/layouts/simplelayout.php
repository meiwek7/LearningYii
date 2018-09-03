<?php

/* @var $this \yii\web\View */
/* @var $content string */


use app\assets\AppAsset;

use yii\helpers\Html;

AppAsset::register($this);
?>






<?php $this->beginPage() ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div class='container'>
	
	
	<h1>My simple layout</h1>
	<div class='wrap'>
		<div class='container'>
        	<ul class="nav navbar-nav">
              <li><a href="index.php?r=site">Home</a></li>
              <li><a href="index.php?r=site/about">About</a></li>
              
              <li><?php echo Html::a('Contact', ['site/contact'] );?></li>

            </ul>
		</div>
	</div>
	
	
	  <?= $content ?>
	  
</div>

<?php $this->endBody() ?>
</body>

</html>

<?php $this->endPage() ?>