<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tbl-registrasi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	// 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model,'full_name',array('class'=>'span5','maxlength'=>100)); ?>
<?php echo $form->textFieldRow($model,'username',array('class'=>'span3','maxlength'=>30)); ?>
<?php echo $form->passwordFieldRow($model,'password',array('class'=>'span3','maxlength'=>100)); ?>
<?php echo $form->hiddenField($model,'id_role',array('class'=>'span5')); ?>
<?php $date=date("Y-m-d"); echo $form->hiddenField($model,'tgl_registrasi',array('class'=>'span4','value'=>$date)); ?>

<?php if (extension_loaded('gd')): ?>
<div class="control-group">
	<?php echo CHtml::activeLabelEx($model, 'verifyCode') ?>
<div>	
	<?php $this->widget('CCaptcha'); ?>
	<?php echo CHtml::activeTextField($model, 'verifyCode'); ?>
</div>
<div class="hint">Letters are not case-sensitive.</div>
<?php endif; ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
		OR
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
			'type'=>'warning',
			'label'=>$model->isNewRecord ? 'Reset' : 'Reset',
		)); ?>
</div>

<?php $this->endWidget(); ?>
