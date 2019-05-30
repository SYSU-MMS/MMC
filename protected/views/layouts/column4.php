<?php 
/*
 *Author: hehao
 *Email:  mickeymousesysu@gmail.com
 *Date: 2013-12-29
 *Function:
 *  
 */

/* @var $this Controller */

?>
<?php $this->beginContent('//layouts/main'); ?>

<div class="row-fluid">
	<div class='leftNavbar' >
           
	<?php $this->widget('bootstrap.widgets.TbMenu', array(
	         'id'=>'teamStyle',
                 'type'=>'list',
		 'items'=>array(
                        array('label'=>'多媒体风采', 'icon'=>'flag'),
                        array('label'=>'优秀助理','url'=>array('site/perfectAssistant'), 'icon'=>'thumbs-up'),
                        array('label'=>'工作感想','url'=>array('site/workFeeling'), 'icon'=>'pencil'),
                        array('label'=>'活动报道','url'=>array('site/activityReport'), 'icon'=>'bullhorn'),
                    ),
		 )); ?>
	</div>
	<div  class='rightContent-full'>
                 <div id='content-main'>
                <?php echo $content; ?>
                </div>
	</div>
</div>

<?php $this->endContent(); ?>


