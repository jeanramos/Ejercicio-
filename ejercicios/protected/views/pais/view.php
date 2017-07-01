<?php
/* @var $this PaisController */
/* @var $model Pais */

$this->breadcrumbs=array(
	'Pais'=>array('admin'),
	$model->id_pais,
);

$this->menu=array(
	
	array('label'=>'Registrar Pais', 'url'=>array('create')),
	array('label'=>'Modificar Pais', 'url'=>array('update', 'id'=>$model->id_pais)),
	array('label'=>'Eliminar Pais', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pais),'confirm'=>'Esta seguro que desea eliminar este item?')),
	array('label'=>'Administrar Pais', 'url'=>array('admin')),
);
?>

<h1>Detalle Pais #<?php echo $model->id_pais; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pais',
		'descripcion',
	),
)); ?>
