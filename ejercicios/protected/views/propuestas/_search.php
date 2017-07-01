<?php
/* @var $this PropuestasController */
/* @var $model Propuestas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_propuesta'); ?>
		<?php echo $form->textField($model,'id_propuesta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto'); ?>
		<?php echo $form->textField($model,'monto',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pais_destino'); ?>
		<?php echo $form->textField($model,'id_pais_destino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_pais_origen'); ?>
		<?php echo $form->textField($model,'id_pais_origen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_usuario'); ?>
		<?php echo $form->textField($model,'id_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->