<?php
/* @var $this PropuestasController */
/* @var $model Propuestas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'propuestas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'monto'); ?>
		<?php echo $form->textField($model,'monto',array('size'=>10,'maxlength'=>10, 'onkeypress'=>'return solo_numero(event)')); ?>
		<?php echo $form->error($model,'monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pais_destino'); ?>
                 <?php echo $form->dropDownList($model, 'id_pais_destino',  CHtml::listData(Pais::model()->findAll(), 'id_pais', 'descripcion'))?>
		<?php echo $form->error($model,'id_pais_destino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pais_origen'); ?>
                 <?php echo $form->dropDownList($model, 'id_pais_origen',  CHtml::listData(Pais::model()->findAll(), 'id_pais', 'descripcion'))?>
		<?php echo $form->error($model,'id_pais_origen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
                <?php echo $form->dropDownList($model, 'id_usuario',  CHtml::listData(Usuarios::model()->findAll(), 'id_usuario', 'apellido'))?>
		<?php echo $form->error($model,'id_usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Modificar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->