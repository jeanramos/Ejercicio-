<?php
/* @var $this PaisController */
/* @var $data Pais */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pais')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pais), array('view', 'id'=>$data->id_pais)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>