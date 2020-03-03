<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $tours common\models\Tours */
$rows = 0;
$this->title = 'Flex tours';
?>
<div class="site-index">

    <div class="body-content">

        <?php foreach ($tours as $tour):
            if($rows == 0):?>
        <div class="row ">
            <?endif;$rows++?>
                <div class="col-sm-4">
                    <div class="img-box">
                    <?= Html::img(Url::home(true) . 'images' . $tour->photo_src, ['class' => 'img-thumbnail']) ?>
                    </div>
                    <h3><?= $tour->title ?></h3>

                    <p><?= $tour->direction ?></p>

                    <?= Html::a('подробнее', ['tours/one', 'id' => $tour->id], ['class' => 'btn btn-success']) ?>
                </div>

            <?php if($rows == 3): ?>
        </div>
        <?$rows = 0; endif;?>
        <?php endforeach; ?>

    </div>
</div>
