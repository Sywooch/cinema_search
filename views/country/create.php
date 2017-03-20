<?php
/**
 * Created by PhpStorm.
 * User: pro
 * Date: 20.03.17
 * Time: 19:57
 */
?>

Добавляем новую страну

<form action="" method="post">
    <input type="text" name="aCountry[name]" placeholder="Название страны">

    <input type="submit">

    <input type="hidden"
           name="<?= \Yii::$app->request->csrfParam ?>"
           value="<?= \Yii::$app->request->getCsrfToken() ?>" >
</form>
