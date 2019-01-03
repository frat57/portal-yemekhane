<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Listem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'food_id')->textInput() ?>

    <?= $form->field($model, 'date_time')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
