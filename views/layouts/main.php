<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
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

<header>
    <div name="carusel" class="col-lg-12 carusel">
    "Карусель вместо футера"
    </div>
</header>
<section>
    <div id="menu" class="col-lg-12 col-xs-12 menu">
        <div class="col-lg-2 col-xs-12"><a href="#">О нас</a></div>
        <div class="col-lg-2 col-xs-12"><a href="#">Фотогалерея</a></div>
        <div class="col-lg-2 col-xs-12"><a href="#">Каталог фирм</a></div>
        <div class="col-lg-2 col-xs-12"><a href="#">Новости</a></div>
        <div class="col-lg-2 col-xs-12"><a href="#">Статьи</a></div>
        <div class="col-lg-2 col-xs-12"><a href="#">Калькулятор</a></div>
    </div>
    <div class="col-lg-12 substrate"></div>
    <div name="article" class="col-lg-12 article">
    "Статья о компании"
    </div>
    <div name="gallery" class="col-lg-12">
        <div class="col-lg-2">
            <div class="col-lg-12 min"><img  id ="Img1" src="#" alt="" onclick="clickImg(src);"></div>
            <div class="col-lg-12 min"><img  id ="Img2" src="#" alt="" onclick="clickImg(src);"></div>
            <div class="col-lg-12 min"><img  id ="Img3" src="#" alt="" onclick="clickImg(src);"></div>
        </div>
        <div id="maxImg" class="col-lg-8 max"></div>
        <div class="col-lg-2">
            <div class="col-lg-12 min"><img  id ="Img4" src="#" alt="" onclick="clickImg(src);"></div>
            <div class="col-lg-12 min"><img  id ="Img5" src="#" alt="" onclick="clickImg(src);"></div>
            <div class="col-lg-12 min"><img  id ="Img6" src="#" alt="" onclick="clickImg(src);"></div>
        </div>
    </div>
    <div name="article" class="col-lg-12 article">
    "Рандомная статья"
    </div>
    <div name="news" class="col-lg-12">
        <div class="col-lg-2 min"></div>
        <div class="col-lg-2 min"></div>
        <div class="col-lg-2 min"></div>
        <div class="col-lg-2 min"></div>
        <div class="col-lg-2 min"></div>
        <div class="col-lg-2 min"></div>
    </div>
    <div name="calc" class="col-lg-12">
        <div name="left_p" class="col-lg-2">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div name="calc_s" class="col-lg-8 calc_s"></div>
        <div name="right_p" class="col-lg-2">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</section>
<footer>
    <div class="col-lg-12 footer">
        <center>
            <ul>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Фотогалерея</a></li>
                <li><a href="#">Каталог фирм</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Статьи</a></li>
                <li><a href="#">Калькулятор</a></li>
            </ul>
        </center>
    </div>
    <div class="delimiter col-lg-12"></div>
    <div name="copyrait" class="col-lg-12 copyrait">
        <center>
            <ul>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">Копирайт</a></li>
            </ul>
        </center>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
