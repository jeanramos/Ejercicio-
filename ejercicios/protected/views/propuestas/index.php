<?php
/* @var $this PropuestasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Propuestases',
);

$this->menu=array(
	array('label'=>'Create Propuestas', 'url'=>array('create')),
	array('label'=>'Manage Propuestas', 'url'=>array('admin')),
);
?>

<h1>Propuestases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
