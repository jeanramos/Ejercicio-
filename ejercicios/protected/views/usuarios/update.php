<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	$model->id_usuario=>array('view','id'=>$model->id_usuario),
	'Modificar',
);

$this->menu=array(
	
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Modificar Usuarios <?php echo $model->id_usuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>