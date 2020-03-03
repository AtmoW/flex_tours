<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $tour common\models\Tours */

$this->title = 'Flex tours';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row justify-content-md-center">
                <div class="col-lg-4">
                    <h2><?= $tour->title?></h2>
                    <?=Html::img(Url::home(true).'images'.$tour->photo_src,['class' => 'img-thumbnail'])?>
                    <div class="row">
                        <div class="col-sm-3 ">
                            <h4><?=$tour->price?>$</h4>
                        </div>
                        <div class="col-sm-3 ">
                            <?= Html::a('купить', ['orders/create', 'tour_id' => $tour->id], ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h3>Направление:</h3>
                    <p><?=$tour->direction?></p>
                    <h3>Описание:</h3>
                    <p><?=$tour->description?></p>
                    <h3>Отправление:</h3>
                    <p><?=$tour->start?></p>
                    <h3>Прибытие:</h3>
                    <p><?=$tour->end?></p>
                </div>
        </div>

    </div>
</div>
