<?php 
namespace frontend\models;

use yii\base\Model;
class Upload extends Model{
    
    public $image;
    
    public function rules(){
        return [
            [['image'],'file','skipOnEmpty' => false,'checkExtensionByMimeType' => false,'extensions' => 'jpg,jpeg,png']
        ];
    }
    
    public function upload(){
        if($this->validate()){
            $this->image->saveAs('../runtime/'.$this->image->baseName.'.'.$this->image->extension);
            return true;
        }else{
            return false;
        }
    }
}