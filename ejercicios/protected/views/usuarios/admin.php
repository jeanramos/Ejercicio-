<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Registar Usuarios', 'url'=>array('create')),
);

?>

<h1>Administrar Usuarios</h1>
    

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'usuarios-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_usuario',
		'nombre',
		'apellido',
		'email',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
