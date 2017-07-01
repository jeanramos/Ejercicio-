<?php
/* @var $this PaisController */
/* @var $model Pais */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pais-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>255, 'onkeypress'=>'return solo_letras(event)')); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Modificar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->