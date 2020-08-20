<?php

//Контроллер связвает модель с представлением
namespace app\controllers;
use app\models\Anketa;
use app\models\AnketaSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii;
class AnketaController extends Controller
{

    public function actionList()
    {
        // $anketa = new Anketa();
        $searchModel = new AnketaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
    }
    public function actionCreate()
    {
        $model = new Anketa();
        if($model->load(Yii::$app->request->post()) && $model->save()) {
            return   $this->redirect(['']);
        }
        return $this->render('create', [
            'model' => $model,
        ]);

        }

    public function actionUpdate($id)
    {
        $article = Articles::findOne($id);
        if($article->load(Yii::$app->request->post()))
        {
            $simvol = mb_strlen($article->text);
            $article->symbols_qty = $simvol;
            if ($article->save())
            {
                Yii::$app->getSession()->setFlash('message', 'Post Updated Successfully');
                return $this->redirect(['/articles/articles', 'id' => $article->id]);
            }
            else
                {
                return $this->render('update', ['article' => $article]);
            }

        }
        else {
            return $this->render('update', ['article' => $article]);
        }
       // return $this->render('update',['article'=>$article]);
    }
    public function actionDelete($id)
    {
        $article = Articles::findOne($id)->delete();
        if($article){
            Yii::$app->getSession()->setFlash('message','Post Deleted Successfully');
            return $this->redirect(['/articles/articles']);
        }
    }
}