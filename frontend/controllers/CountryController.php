<?php 

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Country;
use yii\data\Pagination;
use yii\data\ActiveDataProvider;
class CountryController extends Controller{
    
    public function actionIndex(){
        $query = Country::find();
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->orderBy('name')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
        
    }
    
    /**
     * gridview初次尝试
     * @return Ambigous <string, string>
     */
    public function actionGrid(){
        $dataProvider = new ActiveDataProvider([
            'query' => Country::find(),
            'pagination' => [
                'pageSize' => 4,
            ],
        ]);
        return $this->render('grid',[
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionGrid1(){
        $dataProvider = new ActiveDataProvider([
            'query'=>Country::find(),
            'pagination'=>[
                'pageSize' =>3,  
            ],
        ]);
        return $this->render('grid1',[
            'dataProvider' =>$dataProvider,
        ]);
    }
}