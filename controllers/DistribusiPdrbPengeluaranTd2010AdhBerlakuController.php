<?php

namespace app\controllers;

use Yii;
use app\models\DistribusiPdrbPengeluaranTd2010AdhBerlaku;
use app\models\DistribusiPdrbPengeluaranTd2010AdhBerlakusearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DistribusiPdrbPengeluaranTd2010AdhBerlakuController implements the CRUD actions for DistribusiPdrbPengeluaranTd2010AdhBerlaku model.
 */
class DistribusiPdrbPengeluaranTd2010AdhBerlakuController extends Controller
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
     * Lists all DistribusiPdrbPengeluaranTd2010AdhBerlaku models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DistribusiPdrbPengeluaranTd2010AdhBerlakusearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DistribusiPdrbPengeluaranTd2010AdhBerlaku model.
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
     * Creates a new DistribusiPdrbPengeluaranTd2010AdhBerlaku model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DistribusiPdrbPengeluaranTd2010AdhBerlaku();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DistribusiPdrbPengeluaranTd2010AdhBerlaku model.
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
     * Deletes an existing DistribusiPdrbPengeluaranTd2010AdhBerlaku model.
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
     * Finds the DistribusiPdrbPengeluaranTd2010AdhBerlaku model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DistribusiPdrbPengeluaranTd2010AdhBerlaku the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DistribusiPdrbPengeluaranTd2010AdhBerlaku::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
