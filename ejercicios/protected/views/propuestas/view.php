<?php
/* @var $this PropuestasController */
/* @var $model Propuestas */

$this->breadcrumbs=array(
	'Propuestas'=>array('admin'),
	$model->id_propuesta,
);

$this->menu=array(
	array('label'=>'Registrar Propuestas', 'url'=>array('create')),
	array('label'=>'Modificar Propuestas', 'url'=>array('update', 'id'=>$model->id_propuesta)),
	array('label'=>'Eliminar Propuestas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_propuesta),'confirm'=>'Esta seguro de eliminar este item?')),
	array('label'=>'Administrar Propuestas', 'url'=>array('admin')),
);
?>

<h1>Detalles   Propuestas #<?php echo $model->id_propuesta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_propuesta',
		'monto',
                array('name'=>'id_pais_destino', 'value'=>$model->idPaisDestino->descripcion),
                array('name'=>'id_pais_origen', 'value'=>$model->idPaisOrigen->descripcion),
                array('name'=>'id_usuario', 'value'=>$model->idUsuario->apellido),

	),
)); ?>
