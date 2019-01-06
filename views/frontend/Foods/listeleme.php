<?php
use yii\helpers\Html;
use yii\grid\GridView;

use kouosl\yemekhane\views\frontend\checkboxlist;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\YemeklistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Yemek  Listesi';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="foods-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php?>
	
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
    ]); ?>

    
</div>