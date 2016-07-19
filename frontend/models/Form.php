<?php 
namespace frontend\models;

use yii\base\Model;
class Form extends Model{
    
    public $test1;
    public $test2;
    public $test3;
    public $test4;
    
    
    public function rules(){
        return [
           [['test1'],'required'],
           [['test1'],'string', 'min'=>2,'max'=>6],
           [['test2'],'match', 'pattern'=>'/^(\d)*$/g','message'=>'只能是数字'],
        ];
    } 
    
    public function attributeLabels(){
        return [
            'test2'=>'test2属性标签',
        ];
    }
}