<?php
namespace frontend\controllers;

use common\models\Tours;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class ToursController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $tours = Tours::find()->all();
        return $this->render('all_tours',['tours'=>$tours]);
    }
    public function actionOne($id)
    {
        $tour = Tours::find()->andWhere(['id'=>$id])->one();
        return $this->render('one_tour',['tour'=>$tour]);
    }
    public function actionOrder($id)
    {
        $tour = Tours::find()->andWhere(['id'=>$id])->one();
        return $this->render('order',['tour'=>$tour]);
    }
}
