<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View
/* @var $model app\models\ItemsPedidoCompra 
/* @var $form yii\widgets\ActiveForm 

?>






/* @var $this yii\web\View */
/* @var $model app\models\ItemsPedidoCompra */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="items-pedido-compra-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idPedido')->textInput() ?>

    <?= $form->field($model, 'idInsumo')->dropDownList(ArrayHelper::map(app\models\Insumos::find()->all(),'idInsumo','Descripcion'),['prompt'=>('- Elija un Insumo -')])->label('Seleccione un Insumo:') ?>

    <?= $form->field($model, 'Cantidad')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
