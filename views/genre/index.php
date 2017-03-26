<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
?>
    <h1>Список Жанров</h1>

<?php foreach ($genre as $item) : ?>

    <h2>
        <?= Html::a(
            $item->name,
            ['genre/view', 'id' => $item->id],
            ['class' => 'genre_link']
        )?>
        <!-- <a href="">
		<?= Url::toRoute(['genre/view', 'id' => $item->id]) ?>
		<?= $item->name ?>
	</a> -->
    </h2>

<?php endforeach;?>

<?=  Html::a(
    'Создать Жанр',
    ['genre/create'],
    ['class' => 'btn btn-default ']
) ?>