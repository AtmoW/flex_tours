<?php

namespace frontend\controllers;

use Yii;
use common\models\Orders;
use common\models\OrdersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Tours;

/**
 * OrdersController implements the CRUD actions for Orders model.
 */
class OrdersController extends Controller
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
     * Creates a new Orders model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @param $tour_id
     * @return mixed
     */
    public function actionCreate($tour_id)
    {
        $model = new Orders();

        $model->tour_id = $tour_id;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['/tours', 'id' => $model->id]);
        }

        $tour = Tours::find()->andWhere(['id'=>$tour_id])->one();
        return $this->render('create', [
            'tour' => $tour,
            'model' => $model,
        ]);
    }
}
