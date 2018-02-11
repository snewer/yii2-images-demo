<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Demo */

$this->title = 'Добавление изображения';
$this->params['breadcrumbs'][] = ['label' => 'Демо изображения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
