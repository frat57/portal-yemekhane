<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;
use yii\widgets\Menu;


$this->title = '';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;


Portlet::begin(['title' => $this->title,'subTitle' => 'samples data','icon' => 'glyphicon glyphicon-cog']);


echo $this->render('index');

Portlet::end();



