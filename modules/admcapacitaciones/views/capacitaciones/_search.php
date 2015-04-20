<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admcapacitaciones\models\CapacitacionesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="capacitaciones-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idCapacitacion') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'Descripcion') ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'DuracionHoras') ?>

    <?php // echo $form->field($model, 'idCapacitador') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>