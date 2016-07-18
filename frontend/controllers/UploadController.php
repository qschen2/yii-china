<?php 
namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Upload;
use yii\web\UploadedFile;
class UploadController extends Controller{
    
    public function actionUpload(){
        $upload = new Upload();
        if(\Yii::$app->request->isPost){
            $upload->image = UploadedFile::getInstance($upload,'image');
//             var_dump($upload->image);exit();
            if($upload->upload()){
                echo '上传成功!';
            }else{
                var_dump($upload->getErrors());
            }
        }
        return $this->render('upload',['model' => $upload]);
    }
}