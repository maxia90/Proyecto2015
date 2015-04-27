<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Estadosarticulos */

$this->title = $model->idestado;
$this->params['breadcrumbs'][] = ['label' => 'Estadosarticulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadosarticulos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idestado], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idestado], [
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
            'idestado',
            'Descripcion',
        ],
    ]) ?>

</div>
