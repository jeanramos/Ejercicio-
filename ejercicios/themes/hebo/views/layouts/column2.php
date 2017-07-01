<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<section class="main-body">
  <div class="container">
  <div class="row-fluid">
	
    <div class="span20">

		<?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
                //'homeLink'=>CHtml::link('Dashboard'),
                'htmlOptions'=>array('class'=>'breadcrumb')
            )); ?><!-- breadcrumbs -->
        <?php endif?>
        
        <!-- Include content pages -->
        

	</div><!--/span-->
     <div class="span20">

	
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operaciones',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	
</div>
  <?php echo $content; ?>
  </div><!--/row-->
</div>
</section>


<?php $this->endContent(); ?>