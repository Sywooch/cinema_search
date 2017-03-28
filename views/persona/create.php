<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html; ?>
<div class="container">
	<div class="row">
		<h1 class="text-center">Добавить персону</h1>
		<div class="col-md-12 text-center">
			<div class="col-md-6">
				<?php
				$form = ActiveForm::begin(); ?>

				<?= $form->field($persona, 'name'); ?>
				<?= $form->field($persona, 'surname'); ?>
				<?= $form->field($persona, 'date_dr'); ?>
				<?= $form->field($persona, 'note'); ?>
				<?= $form->field($persona, 'photoFile')->fileinput(); ?>
			</div>
			<div class="col-md-6">
				
				<?= $form->field($persona, 'count_film'); ?>
				<?= $form->field($persona, 'tvShow'); ?>
				<?= $form->field($persona, 'books'); ?>
				<?= $form->field($persona, 'country_id'); ?>
			</div>
				<?= Html::submitButton('Сохранить', ['
				class' => 'btn btn-primary']); ?>
				<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>


<!-- <form action="" method="post">
	<input type="text" name="Persona[name]" placeholder="Имя:"></input><br>
	<input type="text" name="Persona[surname]" placeholder="Фамилия:"></input><br>
	<input type="text" name="Persona[data_dr]" placeholder="Дата рождения:"></input><br>
	<input type="text" name="Persona[note]" placeholder="Описание:"></input><br>

	<input type="submit" class="btn btn-success"></input><br>

	<input type="hidden"
	name="<?= Yii::$app->request->csrfParam ?>"
	value="<?= Yii::$app->request->getCsrfToken() ?>"></input><br>
</form> -->