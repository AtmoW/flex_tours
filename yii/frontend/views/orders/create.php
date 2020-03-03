<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Orders */
/* @var $tour common\models\Tours */

$this->title = 'Оформление заказа';
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-create">

    <h1>Заявка на тур</h1>
    <h2><?= Html::encode($tour->title) ?></h2>
    <h3>Цена: <?= Html::encode($tour->price) ?>$</h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
