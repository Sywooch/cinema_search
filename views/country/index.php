<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>

<h1>Список стран</h1>

<?php foreach ($country as $item) : ?>

	<h2>
	<?= Html::a(
		$item->name,
		['country/view', 'id' => $item->id],
		['class' => 'country_link']
	)?>
	<!-- <a href="">
		<?= Url::toRoute(['country/view', 'id' => $item->id]) ?>
		<?= $item->name ?>
	</a> -->
	</h2>

<?php endforeach;?>
