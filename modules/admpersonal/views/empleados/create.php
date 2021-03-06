<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Empleados */

$this->title = Yii::t('app', 'Agregar Empleado');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Empleados'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empleados-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
