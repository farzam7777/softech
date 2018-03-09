<?php

namespace app\controllers;

use app\models\Posts;
use app\models\PostForm;

use Yii;
use yii\data\Pagination;

class PostsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Posts::find();
        $countQuery = clone $query;
        $pages = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $countQuery->count(),
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
             'posts' => $models,
             'pages' => $pages,
        ]);
    }

    public function actionNew()
    {
        $model = new PostForm;
        $post = new Posts;

        $data['post'] = $model;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $title = Yii::$app->request->post('PostForm')['title'];
            $description = Yii::$app->request->post('PostForm')['description'];
            
            $post->title       = $title;
            $post->description = $description;
            $post->user_id     = Yii::$app->user->identity->id;
            
            if($post->save()){
                Yii::$app->session->setFlash('success', 'Post is successfully Created.');
                return $this->redirect(['index']);
            }
        }
     
        return $this->renderAjax('form', $data);
    }

    public function actionEdit($id = '')
    {

        $model = PostForm::findOne($id);

        $data['post'] = $model;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $title = Yii::$app->request->post('PostForm')['title'];
            $description = Yii::$app->request->post('PostForm')['description'];
            
            $model->title       = $title;
            $model->description = $description;
            
            if($model->save()){
                Yii::$app->session->setFlash('success', 'Post is successfully Updated.');
                return $this->redirect(['index']);
            }
        }
     
        return $this->renderAjax('form', $data);
    }

    public function actionShow()
    {
        return $this->render('show');
    }

}
