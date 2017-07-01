<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	'Registrar',
);

$this->menu=array(
		array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Registrar Usuarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>