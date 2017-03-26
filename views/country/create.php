<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$formcountry = ActiveForm::begin(); ?>

<?= $formcountry->field($country, 'name'); ?>
<?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>

Добавляем новую страну
