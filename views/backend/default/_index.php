<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;
$this->title = 'Admin Paneli';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;
//Portlet::begin(['title' => $this->title,'subTitle' => 'samples data','icon' => 'glyphicon glyphicon-cog']);
//echo $this->render('index');
//Portlet::end();
?>

<div class="site-index">
	 
		<h1>Admin Paneli</h1>
		<br/>
        <p><a class="btn btn-lg btn-success" href="yemekhane/foods">Yemekhane Ayarlari</a>
		
</div>