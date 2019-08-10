<?php

/* @var $this yii\web\View */
use yii\bootstrap\Carousel;
use yii\helpers\Url;
$this->title = 'Gomati Enterprise Pvt. Ltd';
?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo Url::base(true);?>/web/images/building-with-loft-windows-PJKTW79.jpg" alt="...">
      <!-- <div class="carousel-caption">
        ...
      </div> -->
    </div>
    <div class="item">
      <img src="<?php echo Url::base(true);?>/web/images/scaffolding-structure-on-a-building-construction-CLQ836F.jpg" alt="...">
      <!-- <div class="carousel-caption">
        ...
      </div> -->
    </div>
    <div class="item">
      <img src="<?php echo Url::base(true);?>/web/images/modern-multi-storey-industrial-building-PW3GDUS.jpg" alt="... ssdasd">
      <!-- <div class="carousel-caption">
      <h3>Test heading</h3>
      <p>aaaaaaaaaaaaaaaaaa</p>
      </div>
    </div> -->
    <div class="item">
      <img src="<?php echo Url::base(true);?>/web/images/skyscrapers-and-modern-architecture-in-vienna-PW7L46K.jpg" alt="... ssdasd">
      <!-- <div class="carousel-caption">
      <h3>Test heading</h3>
      <p>aaaaaaaaaaaaaaaaaa</p>
      </div> -->
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<h2 class="speaker-text wow  fadeInDown animated" data-wow-duration="1500ms" data-wow-delay="100ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 100ms; animation-name: fadeInDown;">Welcome to Gomati Enterprise</h2>
<p style="font-size: 18px;line-height: 30px; margin-bottom: 30px;">
Gomati provides precast concrete molds and precast concrete forms that are ideal for any precast production plant.
Precast construction is made easier when you are using molds and forms that are of the highest quality.
Gomati can provide the precast concrete molds and precast concrete forms necessary to create precast concrete of all varieties.
</p>
<p style="font-size: 18px;line-height: 30px; margin-bottom: 30px;">
Customized solutions for total precast construction including commercial buildings, parking structures, bridges, warehouses and more. Our engineers work with your team to ensure profitable realization of your project. Precast production of prestressed and non-prestressed elements can be accomplished using high quality and durable molds for precast.
</p>
<!-- <div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    
</div> -->
