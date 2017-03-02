<?php
/**
 * Created by PhpStorm.
 * User: Hijarian
 * Date: 12.07.14
 * Time: 21:40
 */
namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

class ApplicationGreenAssetBundle extends AssetBundle
{
    public $sourcePath = '@app/assets/green';
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';

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
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];

    /*public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'green/_main.min.css',
        'green/_header.min.css',
    ];
    public $js = [
        'green/js/common.js',
        'green/js/libs.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];*/
}
