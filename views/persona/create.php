<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$form = ActiveForm::begin(); ?>

<?= $form->field($persona, 'name'); ?>
<?= $form->field($persona, 'surname'); ?>
<?= $form->field($persona, 'photoFile')->fileinput(); ?>

<?= Html::submitButton('Сохранить', ['
class' => 'btn btn-primary']); ?>



<?php ActiveForm::end(); ?>

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