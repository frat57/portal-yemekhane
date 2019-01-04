<?php

namespace kouosl\yemekhane\controllers\frontend;

use Yii;
use kouosl\yemekhane\models\Listem;
use kouosl\yemekhane\models\ListemSearch;
use kouosl\yemekhane\models\Foods;
use kouosl\yemekhane\models\FoodsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ListemController implements the CRUD actions for Listem model.
 */
class ListemController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Listem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ListemSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Listem model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Listem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Listem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->user_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Listem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->user_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Listem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
	/*
	public function actionList($yemekName){
	  $countkalori = Yemekler::find()->where(['kalori'=>$yemekName])->count();
	   $countkarbonhidrat = Yemekler::find()->where(['carbonhydrate'=>$yemekName])->count();
	    $countprotein = Yemekler::find()->where(['protein'=>$yemekName])->count();
        if($countkalori > 0){
                echo "<option value='".$toplam->kalori."'>".$toplam->kalori."</option>";
				echo "<option value='".$toplam->carbonhydrate."'>".$toplam->carbonhydrate."</option>";
				echo "<option value='".$toplam->protein."'>".$toplam->protein."</option>";
        }else
            echo "<option>-</option>";
	}*/
    /**
     * Finds the Listem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Listem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Listem::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
