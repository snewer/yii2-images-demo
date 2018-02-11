<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Demo */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Демо изображения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="demo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name'
        ],
    ]) ?>

    <h2>Примеры превью:</h2>

    <h3>getPreviewCustom(300, 300):</h3>
    <img src="<?= $model->image->getPreviewCustom(300, 300)->url ?>">

    <h3>getPreviewBestFit(300, 300):</h3>
    <img src="<?= $model->image->getPreviewBestFit(300, 300)->url ?>">

    <h3>getPreviewToWidth(300):</h3>
    <img src="<?= $model->image->getPreviewToWidth(300)->url ?>">

    <h3>getPreviewToHeight(300):</h3>
    <img src="<?= $model->image->getPreviewToHeight(300)->url ?>">

    <h3>getPreviewBackgroundColor(300, 300, '#EEEEEE'):</h3>
    <img src="<?= $model->image->getPreviewBackgroundColor(300, 300, '#EEEEEE')->url ?>">

    <h3>getPreviewBackgroundImage(300, 300):</h3>
    <img src="<?= $model->image->getPreviewBackgroundImage(300, 300)->url ?>">

</div>
