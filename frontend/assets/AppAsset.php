<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'statics/css/font-awesome.min.css',
        'statics/css/prettyPhoto.css',
        'statics/css/animate.css',
        'statics/css/main.css',
        'statics/css/site.css',
    ];
    public $js = [
        'statics/js/bootstrap.min.js',
        'statics/js/jquery.prettyPhoto.js',
        'statics/js/jquery.isotope.min.js',
        'statics/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
