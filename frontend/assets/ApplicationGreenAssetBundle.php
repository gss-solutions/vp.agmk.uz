<?php
/**
 * Created by PhpStorm.
 * User: Hijarian
 * Date: 12.07.14
 * Time: 21:40
 */
namespace frontend\assets;

use yii\web\AssetBundle;

class ApplicationGreenAssetBundle extends AssetBundle
{
    public $sourcePath = '@app/assets/green';
    public $css = [
        '_main.min.css',
        '_header.min.css',

    ];
    public $js = [
        'js/common.js',
        'js/libs.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
