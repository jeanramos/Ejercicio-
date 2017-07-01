<?php
/* @var $this PaisController */
/* @var $model Pais */

$this->breadcrumbs=array(
	'Pais'=>array('admin'),
	'Adminitrar',
);

$this->menu=array(
	array('label'=>'Registrar Pais', 'url'=>array('create')),
);

?>

<h1>Administrar Paises</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pais-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_pais',
		'descripcion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
