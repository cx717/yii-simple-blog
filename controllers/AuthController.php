<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Article;
use yii\data\Pagination;

use yii\helpers\Url;

class AuthController extends Controller
{

    /**
    * Login action.
    *
    * @return Response|string
    */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {

            return Yii::$app->response->redirect(Url::to('/admin/article'));
        }

     $model = new LoginForm();
     if ($model->load(Yii::$app->request->post()) && $model->login()) {

        // return $this->goBack();
         return Yii::$app->response->redirect(Url::to('/admin/article'));
     }

     $model->password = '';
     return $this->render('/site/login', [
            'model' => $model,
        ]);
    }

    /**
    * Logout action.
    *
    * @return Response
    */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
