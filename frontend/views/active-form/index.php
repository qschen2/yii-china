<?php 

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
 <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

    <?= $form->field($model, 'test1')->label('文本框的标题') ?> <!-- 文本框的标题 -->
    
     <?= $form->field($model, 'test2')->hint('测试hint'); ?><!-- 文本框下方的提示 -->
     
     <?= $form->field($model, 'test3')->input('password')?> <!-- input(type) type的类型有 text password等 -->
     
     <?= $form->field($model, 'test3')->hiddenInput() ?><!-- 隐藏文本框 -->
     
     <?= $form->field($model, 'test3')->textarea(['rows'=>'5']) ?> <!-- 文本域 应用于输入内容较多比如文章简介等 rows=>3 表示文本域高为3 -->
     
     <?= $form->field($model,'test3')->fileInput()?> <!-- 文件上传 -->
     
     <?= $form->field($model,'test3')->radio()?>
     
     <?= $form->field($model,'test3')->checkbox()?>
     
     <?= $form->field($model,'test4')->listBox(['0'=>'box1','1'=>'box2'])?>
     
     <?= $form->field($model, 'test3')->checkboxList(['0'=>'box1','1'=>'box2']) ?>
     
      <?= $form->field($model, 'test3')->dropDownList(['1'=>'下拉选项1','2'=>'下拉选项2']) ?>
      
       <?= $form->field($model,'test3')->widget(yii\captcha\Captcha::className())?>
       
       <div class="form-group">
            <?= Html::submitButton('按钮', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        </div>

<?php ActiveForm::end()?>
