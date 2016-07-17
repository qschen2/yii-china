<?php
use yii\grid\GridView;
echo GridView::widget([
    'dataProvider'=> $dataProvider,
    'columns' => [
        'name',
        'code',
        'population',
        [
        'class' => 'yii\grid\CheckboxColumn',
        // 在此配置其他属性
        ],
    ],
    
])
?>