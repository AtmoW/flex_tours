<?php

/* @var $this yii\web\View */
/* @var $tours common\models\Tours */

$this->title = 'Flex tours';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <?php foreach ($tours as $tour):?>
            <div class="col-lg-4">
                <h2><?= $tour->title?></h2>

                <p><?=$tour->direction?></p>

                <?=\yii\helpers\Html::a('подробнее', ['tours/one','url' => $tour->url],['class'=>'btn btn-success'])?>
            </div>
            <?php endforeach;?>
        </div>

    </div>
</div>
