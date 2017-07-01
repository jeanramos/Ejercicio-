<?php
/* @var $this PaisController */
/* @var $model Pais */

$this->breadcrumbs=array(
	'Paise'=>array('admin'),
	$model->id_pais=>array('view','id'=>$model->id_pais),
	'Modificar',
);

$this->menu=array(

	array('label'=>'Administrar Pais', 'url'=>array('admin')),
);
?>

<h1>Modificar Pais <?php echo $model->id_pais; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>