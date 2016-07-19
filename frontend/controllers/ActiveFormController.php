<?php 
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Form;
class ActiveFormController extends Controller{
    
    public function actionIndex(){
        $this->layout = null;
        $model = new Form();
        return $this->render('index',['model'=>$model]);
    }
}