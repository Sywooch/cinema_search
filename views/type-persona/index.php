<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
?>
    <h1>Список Типов </h1>

<?php foreach ($typepersona as $item) : ?>

    <h2>
        <?= Html::a(
            $item->type,
            ['type-persona/view', 'id' => $item->id],
            ['class' => 'typepersona_link']
        )?>
        <!-- <a href="">
		<?= Url::toRoute(['type-persona/view', 'id' => $item->id]) ?>
		<?= $item->type ?>
	</a> -->
    </h2>

<?php endforeach;?>

<?=  Html::a(
    'Создать Тип',
    ['type-persona/create'],
    ['class' => 'btn btn-default ']
) ?>