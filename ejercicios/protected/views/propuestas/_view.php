<?php
/* @var $this PropuestasController */
/* @var $data Propuestas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_propuesta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_propuesta), array('view', 'id'=>$data->id_propuesta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto')); ?>:</b>
	<?php echo CHtml::encode($data->monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pais_destino')); ?>:</b>
	<?php echo CHtml::encode($data->id_pais_destino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pais_origen')); ?>:</b>
	<?php echo CHtml::encode($data->id_pais_origen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->id_usuario); ?>
	<br />


</div>