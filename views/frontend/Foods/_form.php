<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kouosl\yemekhane\models\Foods
use kouosl\yemekhane\models\Listem
use dosamigos\datepicker\DatePicker

/* @var $this yii\web\View */
/* @var $model backend\models\Foods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foods-form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'userid')->textInput(['readonly' => true, 'value' =>Yii::$app->user->identity->username])->label("Kullanıcı Adı") ?>
<?php $model->userid= Yii::$app->user->identity->id?>
<?= $form->field($model, 'meal')->dropDownList (
 ArrayHelper::map(Foods::find()->all(), 'name', 'name'),
 ?>
    
    <?= $form->field($model, 'name')->dropDownList(
 ArrayHelper::map(Yemekler::find()->all(), 'name', 'name'),
            ['prompt'=>'Yemek Seçiniz',
               'onchange'=>'$.post("index.php?r=admin/foods-form-kalori/calorie&name='.'"+$(this).val(), function(data){
                    $("#kaloritable-kalori").html(data);});'
                ])->label("Yemek Seçiniz")  ?>

    
    <?= $form->field($model, 'Tarih')->widget(DatePicker::className(), [
    'inline' => false, 
    'clientOptions' => [
        'autoclose' => true,
        'format' => 'yyyy-m-dd',
        'startDate' => date('2019-01-01'),
        'endDate' => date(''),
    ],
]) ?>
    <?= $form->field($model, 'kalori','karbonhidrat','protein')->dropDownList(
            ['prompt'=>'kalori değeri','karbonhidrat değeri','protein değeri',
                ])->label("kalori")->label("carbonhydrate")->label("protein")?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
