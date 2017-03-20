<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>

<h1>Список фильмов:</h1>

<?php foreach ($film as $item) : ?>

    <h2>
        <?= Html::a(
            $item->nameFilm,
            ['film/view', 'id' => $item->id],
            ['class' => 'film_link']
        )?>
        <!-- <a href="">
		<?= Url::toRoute(['film/view', 'id' => $item->id]) ?>
		<?= $item->nameFilm ?>
	</a> -->
    </h2>

<?php endforeach;?>
