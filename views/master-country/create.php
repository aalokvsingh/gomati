<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MasterCountry */

$this->title = Yii::t('app', 'Create Master Country');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Master Countries'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="master-country-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
