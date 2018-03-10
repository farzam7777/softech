<?php

namespace app\controllers;

use app\components\EmailHelper;
use app\components\QueryHelper;
use app\models\Discussions;
use app\models\UserSubscriptions;
use Yii;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * SubscriptionController implements the CRUD actions for Projects model.
 */
class SubscriptionController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                ],
            ],
        ];
    }

    public function actionCreate()
    {
        $this->layout = "theme_layout";
        $model = new UserSubscriptions();
        if (Yii::$app->request->post()) {
            $query = $_POST['query'];
            $type = $_POST['type'];
            $model->link = $_POST['link'];
            $model->user_id = Yii::$app->user->identity->id;
            $model->alert_time = $_POST['alert_time'];
            if ($model->save()) {
                return $this->redirect(['site/search', 'query' => $query, 'type' => $type]);
            }
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findModel($id)
    {
        if (($model = UserSubscriptions::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
