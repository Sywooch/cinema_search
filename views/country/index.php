<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
use yii\helpers\Html;

?>

<h1>country/index</h1>

<? var_dump(($country)); ?>

<?php foreach ($country as $item) : ?>
    <h2>
        <?= Html::a($item->name,['country/view','id' => $item->id],[
                'class' => 'country-link'
        ]) ?>
   </h2>

//           <?= $item->name ?></h2>

//    <div>Страна: <?= $item->name ?></div>

<?php endforeach;; ?>
