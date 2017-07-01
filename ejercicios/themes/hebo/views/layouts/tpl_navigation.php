<section id="navigation-main">  
<div class="navbar">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
  
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(
						array('label'=>'Usuario <span class="caret"></span>', 'url'=>array('/usuarios/admin'),
                       ),
						array('label'=>'Propuestas <span class="caret"></span>', 'url'=>array('/propuestas/admin')),
						array('label'=>'Pais <span class="caret"></span>', 'url'=>array('/pais/admin')),
                       ),
			 
                )); ?>
    	</div>
    </div>
	</div>
</div>
</section><!-- /#navigation-main -->