<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Listem */

$this->title = Yii::t('app', 'Create Listem');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Listems'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="listem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
