<?php
/* @var $this PropuestasController */
/* @var $model Propuestas */

$this->breadcrumbs=array(
	'Propuestases'=>array('admin'),
	$model->id_propuesta=>array('view','id'=>$model->id_propuesta),
	'Modificar',
);

$this->menu=array(
	
	array('label'=>'Administrar Propuestas', 'url'=>array('admin')),
);
?>

<h1>Modificar Propuestas <?php echo $model->id_propuesta; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>