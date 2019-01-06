<?php
namespace kouosl\yemekhane\controllers\frontend;

use Yii;
use yii\helpers\ArrayHelper;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use kouosl\yemekhane\models\Foods;
use kouosl\yemekhane\models\Listem;
use yii\web\UploadedFile;
use yii\filters\Cors;


/**
 * Default controller for the `yemekhane` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
	   /**
     * @inheritdoc
     */
	   
     public function beforeAction($action) {
       
        if ($action->id == 'login') {
            $this->enableCsrfValidation = false;
        } 
        return parent::beforeAction($action);
    }
    
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                    'access' => [
                        'class' => AccessControl::className(),
                        'only' => ['logout', 'signup','contact','about'],
                        'rules' => [
                            [
                                'actions' => ['signup','contact','about'],
                                'allow' => true,
                                'roles' => ['?'],
                            ],
                            [
                                'actions' => ['logout','contact','about'],
                                'allow' => true,
                                'roles' => ['@'],
                            ],
                     
                        ],
                    ]
        ]);
    }
public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ]
        ];
    }
    public function actionIndex()
    {
    	$model =new Foods();
    	$model->save();
    	$Foods = Yii::$app->db->createCommand('SELECT * FROM foods')->queryAll();
    	$FoodsCorba = Yii::$app->db->createCommand('SELECT * FROM foods WHERE type = 0')->queryAll();
    	$FoodsAnaYemek = Yii::$app->db->createCommand('SELECT * FROM foods WHERE type = 1')->queryAll();
    	$FoodsTatli = Yii::$app->db->createCommand('SELECT * FROM foods WHERE type = 2')->queryAll();

    //	$date = Yii::$app->db->createCommand('SELECT date_time FROM Listem ')->queryAll();
        return $this->render('/Foods/listeleme',['Foods' => $Foods,'model' => $model,'FoodsCorba' => $FoodsCorba,'model'=> $model,'FoodsAnaYemek' => $FoodsAnaYemek,'model'=> $model,'FoodsTatli' => $FoodsTatli, 'model' => $model]);
    }
}
