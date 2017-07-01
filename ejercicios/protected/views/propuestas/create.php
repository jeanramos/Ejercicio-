<?php
/* @var $this PropuestasController */
/* @var $model Propuestas */

$this->breadcrumbs=array(
	'Propuestas'=>array('admin'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Administrar Propuestas', 'url'=>array('admin')),
);
?>

<h1>Registrar Propuestas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>