<?php

namespace app\controllers;

use Yii;
use app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc;
use app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtocsearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtocController implements the CRUD actions for PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc model.
 */
class PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtocController extends Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtocsearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
