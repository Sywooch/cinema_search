<?php
/* @var $this yii\web\View */
?>

Добавляем тип отношения к фильму

<form action="" method="post">
    <input type="text" name="aTypePersona[type]" placeholder="Тип персоны">

    <input type="submit">

    <input type="hidden"
           name="<?= \Yii::$app->request->csrfParam ?>"
           value="<?= \Yii::$app->request->getCsrfToken() ?>" >
</form>
