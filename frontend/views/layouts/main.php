<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\ApplicationGreenAssetBundle;
use common\widgets\Alert;

$ApplicationGreenAssetBundle = ApplicationGreenAssetBundle::register($this);
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
<body>
<?php $this->beginBody() ?>

<header class="main-head">
    <div class="main-head-top">
        <div class="container">
            <div class="row">
                <div class="mnu-line clearfix">
                    <div class="col-xs-12 hidden-md hidden-lg hidden-sm">
                        <nav class="lang-mnu">
                            <ul>
                                <li class="active"> <a href="#" class="line">Русский</a>  </li>
                                <li>|</li>
                                <li> <a href="#" class="last">Ўзбекча</a> </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-12 hidden-xs">
                        <nav class="lang-mnu">
                            <ul>
                                <li class="active"> <a href="#" class="line">Русский</a>  </li>
                                <li>|</li>
                                <li> <a href="#" class="last">Ўзбекча</a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-head-middle">
        <div class="container">
            <div class="row">
                <div class="header-content clearfix">
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <a href="#" class="photo"><img src="<?= $ApplicationGreenAssetBundle->baseUrl . '/img/farmonov.jpg'?>" alt="AGMK"></a>
                        <div class="header-content-info hidden-xs hidden-sm ">
                            <h3> <i class="fa fa-check"></i> У Вас есть нерешённые проблемы, заявления, жалобы или предложения?</h3>
                            <h3><i class="fa fa-check"></i> У Вас есть возможность отправить их в виде обращения Генеральному директору АО "Алмалыкский ГМК"</h3>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-10 col-xs-12">
                        <div class="header-content-dir-info">
                            <h4>Виртуальная приёмная Генерального директора </br> АО "Алмалыкский ГМК"</h4>
                            <h1>Фарманова Александра Касымовича</h1>
                        </div>
                        <div class="header-content-info hidden-md hidden-lg hidden-sm">
                            <h3> <i class="fa fa-check"></i> У Вас есть нерешённые проблемы, заявления, жалобы или предложения?</h3>
                            <h3><i class="fa fa-check"></i> У Вас есть возможность отправить их в виде обращения Генеральному директору  </br> АО "Алмалыкский ГМК"</h3>
                        </div>
                    </div>
                    <div class="col-sm-12 hidden-md hidden-lg hidden-xs">
                        <div class="header-content-info ">
                            <h3> <i class="fa fa-check"></i> У Вас есть нерешённые проблемы, заявления, жалобы или предложения?</h3>
                            <h3><i class="fa fa-check"></i> У Вас есть возможность отправить их в виде обращения Генеральному директору АО "Алмалыкский ГМК"</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-content-msg hidden-sm hidden-xs">
                            <img src="<?= $ApplicationGreenAssetBundle->baseUrl . '/img/blog_half-ipad.png'?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-head-bottom">
        <div class="container">
            <div class="row">
                <div class="header-content-menu hidden-xs clearfix">
                    <div class="col-md-12 col-sm-12">
                        <?= Alert::widget() ?>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <h2 class="header-content-menu-text ">В виртуальную приёмную можно направить обращение 3 способами:</h2>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="header-content-menu-line"></div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="header-content-menu-block">
                            <img src="<?= $ApplicationGreenAssetBundle->baseUrl . '/img/mini_www.png'?>" alt="" class="header-content-menu-img">
                            <span>Через веб-адрес</span><h1>www.agmk.uz</h1>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="header-content-menu-block">
                            <img src="<?= $ApplicationGreenAssetBundle->baseUrl . '/img/mini_phone.png'?>" alt="" class="header-content-menu-img">
                            <span>По телефону</span><h1>(+998 71) 141-93-33</h1>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="header-content-menu-block">
                            <img src="<?= $ApplicationGreenAssetBundle->baseUrl . '/img/mini_human.png'?>" alt="" class="header-content-menu-img">
                            <span>По электронной почте</span><h1>info@agmk.uz</h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="header-content-menu-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?= $content ?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-content">
                    <h5>© 2017 АО "Алмалыкский ГМК"</h5>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="hidden"></div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
