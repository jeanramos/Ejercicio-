<?php
/* @var $this PaisController */
/* @var $model Pais */

$this->breadcrumbs=array(
	'Pais'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	
	array('label'=>'Administrar Pais', 'url'=>array('admin')),
);
?>

<h1>Registrar Pais</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>