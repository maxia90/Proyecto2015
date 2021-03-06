<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Capacitaciones */

$this->title = $model->idCapacitacion;
$this->params['breadcrumbs'][] = ['label' => 'Capacitaciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="capacitaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->idCapacitacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'id' => $model->idCapacitacion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Seguro quiere borrar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idCapacitacion',
            'Nombre',
            'Descripcion:ntext',
            'Fecha',
            'DuracionHoras',
            'idCapacitador',
        ],
    ]) ?>

</div>
