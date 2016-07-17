<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\web\View;

AppAsset::register($this);
$this->registerCssFile('@web/statics/css/login.css',['depends'=>'backend\assets\AppAsset']);
$this->registerJsFile('@web/statics/js/yii.activeForm.js',['depends'=>'backend\assets\AppAsset']);
$this->registerJsFile('@web/statics/js/jquery.validate.min.js',['depends'=>'backend\assets\AppAsset']);
$this->registerJsFile('@web/statics/js/login.js',['depends'=>'backend\assets\AppAsset']);
$jsStr='jQuery(document).ready(function() {App.init(); Login.init();});';
$this->registerJs($jsStr,View::POS_END);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="login">
<?php $this->beginBody() ?>
    <?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
