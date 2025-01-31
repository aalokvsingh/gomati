


<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

//Register class
if (class_exists('ramosisw\CImaterial\web\MaterialAsset')) {
    ramosisw\CImaterial\web\MaterialAsset::register($this);
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="google-site-verification" content="6h5_jKwY0IKm5ADH5eBKY8ju5RTTurrjdyHeytk7dQ4" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '',
        'brandUrl' => Yii::$app->homeUrl,
        // 'brandLabel' => Yii::$app->name,
        // 'brandLabel' => '<img src="'.Url::base(true).'/images/whitelogo.png" class="img-responsive"/>',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container contentarea">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
<footer id="myFooter">
        <div class="container1">
            <ul>
                <li><a href="<?php echo Url::base(true);?>/site/about">Company Information</a></li>
                <li><a href="<?php echo Url::base(true);?>/site/contact">Contact us</a></li>
                <!-- <li><a href="#">Reviews</a></li> -->
                <li><a href="#">Terms of service</a></li>
            </ul>
        <p class="footer-copyright">&copy; Gomati Enterprise Pvt. Ltd.<?= date('Y') ?></p>
        </div>
        <div class="footer-social">
            <a href="https://www.facebook.com/thegomati" target="_blank" class="social-icons"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/thegomati/" target="_blank" class="social-icons"><i class="fa fa-instagram"></i></a>
            <!-- <a href="#" class="social-icons"><i class="fa fa-google-plus"></i></a> -->
            <a href="https://twitter.com/thegomati" target="_blank" class="social-icons"><i class="fa fa-twitter"></i></a>
        </div>
    </footer>

<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
