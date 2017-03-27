<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
?>

<h1>Список стран</h1>

<?= GridView::widget([
        'dataProvider' => $countrys,
        'filterModel' => $countrySearch,
        'columns' => [
                'name',
                [
                        'class' => 'yii\grid\ActionColumn',
                        'template' => '{view} {update}'
                ]
        ]
]) ?>

<?=  Html::a(
        'Создать страну',
        ['country/create'],
        ['class' => 'btn btn-default ']
) ?>
