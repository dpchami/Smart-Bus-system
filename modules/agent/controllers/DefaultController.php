<?php

namespace app\modules\agent\controllers;

use Da\User\Model\User;
use yii\web\Controller;
use app\models\BusOwner;
use yii\web\NotFoundHttpException;

/**
 * Default controller for the `agent` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionProfile($id){
    	return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

     protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
