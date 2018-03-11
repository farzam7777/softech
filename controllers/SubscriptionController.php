<?php

namespace app\controllers;

use app\components\EmailHelper;
use app\components\QueryHelper;
use app\models\Discussions;
use app\models\UpcomingMatches;
use app\models\User;
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = "theme_layout";
        $user = User::findOne(Yii::$app->user->id);
        $data = array();
        if (!empty($user->subscriptions)) {
            $data = $user->subscriptions;
        }
        return $this->render('/user/subscriptions', ['data' => $data, 'user' => $user]);
    }

    public function actionCreate()
    {
        $this->layout = "theme_layout";
        $model = new UserSubscriptions();
        if (Yii::$app->request->post()) {
            $query = $_POST['query'];
            $type = $_POST['type'];
            $model->user_id = Yii::$app->user->identity->id;
            $model->link = $_POST['link'];
            $model->name = $_POST['name'];
            $model->label = $_POST['label'];
            $model->image_url = $_POST['image_url'];
            $model->alert_time = $_POST['alert_time'];
            if ($model->save()) {
                $data = array();
                $result = shell_exec("python3 /home/farzam/PycharmProjects/DataScience/Assignment2/loaad.py $label $link");
                    if(empty($result)){
                    $path = Yii::$app->getBasePath() . "/Load.csv";
                    $file = fopen($path, "r");
                    while (!feof($file)) {
                        $data[] = fgetcsv($file);
                    }
                    fclose($file);
                    unset($data[0]);
                    if (!empty($data)) {
                        foreach ($data as $value) {
                            //dd($value);
                            if (!empty($value)) {
                                $name = $value[2] . ' vs ' . $value[3] . ' in ' . $value[4];
                                $ummodel = new UpcomingMatches();
                                $ummodel->user_id = Yii::$app->user->identity->id;
                                $ummodel->name = $name;
                                $ummodel->date = $value[0];
                                $ummodel->time = $value[1];
                                $ummodel->save();
                            }
                        }
                    }
                }

                return $this->redirect(['site/search', 'query' => $query, 'type' => $type]);
            }
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->delete();
        return $this->redirect(['index']);
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
