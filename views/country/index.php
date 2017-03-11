<?php
/* @var $this yii\web\View */
?>
<h1>country/index</h1>

<? var_dump(($country)); ?>

<?php foreach ($country as $item) : ?>
    <h2><?= $items->name ?></h2>
    <div>Страна: <?= $items->name ?></div>
<?php endforeach;; ?>
