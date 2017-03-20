<?php
/* @var $this yii\web\View */
?>

Добавляем жанр фильма

<form action="" method="post">
    <input type="text" name="aGenre[name]" placeholder="Жанр">

    <input type="submit">

    <input type="hidden"
           name="<?= \Yii::$app->request->csrfParam ?>"
           value="<?= \Yii::$app->request->getCsrfToken() ?>" >
</form>
