<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kouosl\theme\widgets\Portlet;
use kouosl\yemekhane\models\Foods;
use kouosl\yemekhane\Module;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\YemeklistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Yemek  Listesi';
$this->params['breadcrumbs'][] = $this->title;
?>

<!DOCTYPE html>
<html>
	<head>
		<title> </title>
		<style type="text/css">
			.wrapper{
					height: 700px;
					width: 800px;
					background-color: skyblue;
					margin:auto;
					text-align:center;
					border: 1px solid white;
					box-shadow: 2px 2px 10px gray;
			}
			h1{
					background-color: mediumseagreen;
					color:white;
					border-bottom: 2px solid white;
					padding:20px;
					margin:0px;
			}
			h4{
					
			}
		</style>
	</head>
	
	<body>
		<div class="wrapper">
			<h1><?php
				$lang = yii::$app->session->get('lang');
        			\Yii::$app->language = $lang;
        			yii::$app->session->set('lang',$lang);
        			\Yii::$app->language = 'tr-TR'; // /iletisim sayfası default olarak kendini en-US ayarladığı için tr'yi belirtmek zorunda kaldım. Çeviri özelliği çalışıyor. Module.php ayarları yapıldı.
                    echo Module::t('Foods','Yemekler');
			?></h1>
			
			<div style="clear: both">   
		    		<h3>Çorbalar </h3>
    			<div class="row " style="padding-left: 10%;padding-right: 10%; margin: 0px auto;">
    				<table class=table> 
							<thead>
								<th>Ad</th>
								<th>Kalori</th>
								<th>Karbonhidrat</th>
								<th>Protein</th>
							</thead>
            		<?php $y=0; foreach($FoodsCorba as $value){ ?>
							<tbody>
								<tr>
									<td><?php echo  $value["name"]; ?> </td>
									<td><?php echo  $value["calorie"]; ?> </td>
									<td><?php echo  $value["carbonhydrate"]; ?> </td>
									<td><?php echo  $value["protein"]; ?> </td>
								</tr>
							</tbody>
						
             		<?php $y++; } ?>
             		</table>
    			</div>
			</div>
		
			<div style="clear: both">  
    			<h3 >Ana Yemekler </h3>
	    			<div class="row " style="padding-left: 10%;padding-right: 10%; margin: 0px auto;">
    				<table class=table> 
							<thead>
								<th>Ad</th>
								<th>Kalori</th>
								<th>Karbonhidrat</th>
								<th>Protein</th>
							</thead>
            		<?php $y=0; foreach($FoodsAnaYemek as $value){ ?>
							<tbody>
								<tr>
									<td><?php echo  $value["name"]; ?> </td>
									<td><?php echo  $value["calorie"]; ?> </td>
									<td><?php echo  $value["carbonhydrate"]; ?> </td>
									<td><?php echo  $value["protein"]; ?> </td>
								</tr>
							</tbody>
						
             		<?php $y++; } ?>
             		</table>
    			</div>
			</div>

			<div style="clear: both">  
    		<h3>Tatlılar  </h3>
    			<div class="row " style="padding-left: 10%;padding-right: 10%; margin: 0px auto;">
    				<table class=table> 
							<thead>
								<th>Ad</th>
								<th>Kalori</th>
								<th>Karbonhidrat</th>
								<th>Protein</th>
							</thead>
            		<?php $y=0; foreach($FoodsTatli as $value){ ?>
							<tbody>
								<tr>
									<td><?php echo  $value["name"]; ?> </td>
									<td><?php echo  $value["calorie"]; ?> </td>
									<td><?php echo  $value["carbonhydrate"]; ?> </td>
									<td><?php echo  $value["protein"]; ?> </td>
								</tr>
							</tbody>
						
             		<?php $y++; } ?>
             		</table>
    			</div>
        	</div>
        </div>

	</body>
</html>	
	
