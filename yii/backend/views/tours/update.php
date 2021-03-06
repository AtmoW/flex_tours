<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Tours */

$this->title = 'Update Tours: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tours-update">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
   </div>
