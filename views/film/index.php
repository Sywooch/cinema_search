<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
?>
<h1>Список Фильмов</h1>

<?= GridView::Widget([
    'dataProvider' => $ашдь,
    'filterModel' => $ашдьSearch,
    'columns' => [
        'name',
        'surname',
        [
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update}'
        ]
    ]
]); ?>

<?= Html::a(
    'Добавить персону',
    ['persona/create'],
    ['class' => 'btn btn-success',]
) ?>
