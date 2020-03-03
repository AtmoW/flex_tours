<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DateRangePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Tours */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tours-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direction')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'start')->widget(DateRangePicker::className(), [
        'attributeTo' => 'end',
        'form' => $form,
        'language' => 'es',
        'size' => 'lg',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ])->label('Дата отправления - дата прибытия');?>

    <?= $form->field($model, 'price')->textInput() ?>

     <? if (!$model->isNewRecord) : ?>
         <?=Html::img(str_replace('admin','flex',\yii\helpers\Url::home(true)).'images'.$model->photo_src,['class' => 'img-thumbnail'])?>
     <? endif; ?>
         <?= $form->field($model, 'imageFile')->fileInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
