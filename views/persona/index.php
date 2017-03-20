<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
?>
<h1>Список персон</h1>

<?php foreach ($persona as $item) : ?>

	<h2>
	<?= Html::a(
		$item->name,
		['persona/view', 'id' => $item->id],
		['class' => 'persona_link']
	)?>
	<!-- <a href="">
		<?= Url::toRoute(['persona/view', 'id' => $item->id]) ?>
		<?= $item->name ?>
	</a> -->
	</h2>

<?php endforeach;?>


<?= Html::a(
'Добавить персону',
['persona/create'],
['class' => 'btn btn-success']
) ?>
