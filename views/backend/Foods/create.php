<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Foods */

$this->title = Yii::t('app', 'Create Foods');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Foods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
