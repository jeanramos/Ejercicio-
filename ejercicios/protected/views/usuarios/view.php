<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	$model->id_usuario,
);

$this->menu=array(

	array('label'=>'Registrar Usuario', 'url'=>array('create')),
	array('label'=>'Modificar Usuario', 'url'=>array('update', 'id'=>$model->id_usuario)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_usuario),'confirm'=>'Esta seguro que desea elimitar este item?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Detalles Usuarios #<?php echo $model->id_usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_usuario',
		'nombre',
		'apellido',
		'email',
	),
)); ?>
