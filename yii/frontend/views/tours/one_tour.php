<?php

/* @var $this yii\web\View */
/* @var $tour common\models\Tours */

$this->title = 'Flex tours';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
                <div class="col-lg-4">
                    <h2><?= $tour->title?></h2>
                        <h3>Направление:</h3>
                        <p><?=$tour->direction?></p>
                        <h3>Описание:</h3>
                        <p><?=$tour->description?></p>
                        <h3>Отправление:</h3>
                        <p><?=$tour->start?></p>
                        <h3>Прибытие:</h3>
                        <p><?=$tour->end?></p>
                        <h3>Цена:</h3>
                        <p><?=$tour->price?>$</p>
                </div>
        </div>

    </div>
</div>
