<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\Datepicker;
use kouosl\yemekhane\Foods;

/* @var $this yii\web\View */
/* @var $model backend\models\Foods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'food_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'Çorbalar' => 'Çorbalar', 'Ana yemek' => 'Ana yemek', 'Tatlı' => 'Tatlı', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'calorie')->textInput() ?>

    <?= $form->field($model, 'carbonhydrate')->textInput() ?>

    <?= $form->field($model, 'protein')->textInput() ?>
	

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
