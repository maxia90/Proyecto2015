<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admcomedor\models\ReservasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reservas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idReserva') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'idMenu') ?>

    <?= $form->field($model, 'idEmpleado') ?>

    <?= $form->field($model, 'Retiro') ?>

    <?= $form->field($model, 'Observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
