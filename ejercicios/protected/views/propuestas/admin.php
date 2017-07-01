<?php
/* @var $this PropuestasController */
/* @var $model Propuestas */

$this->breadcrumbs=array(
	'Propuestas'=>array('admin'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Registrar Propuestas', 'url'=>array('create')),
);

?>

<h1>Administrar Propuestas</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'propuestas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_propuesta',
		'monto',
                array('name'=>'id_pais_destino', 'value'=>'$data->idPaisDestino->descripcion'),
                array('name'=>'id_pais_origen', 'value'=>'$data->idPaisOrigen->descripcion'),
                array('name'=>'id_usuario', 'value'=>'$data->idUsuario->apellido'),
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
