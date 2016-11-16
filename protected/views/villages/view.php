<?php
/* @var $this VillagesController */
/* @var $model Villages */

$this->breadcrumbs=array(
	'Villages'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Villages';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('List',
		array('index'),
		array('class' => 'btn btn-success', 'title'=>'List Villages'));
		?>
		<?php echo CHtml::link('Manage',
			array('admin'),
			array('class' => 'btn btn-success','title'=>'Manage Villages'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'id',
						'district_id',
						'name',
						),
						)); ?>

					</section>

					<STYLE>
						th{width:150px;}
					</STYLE>

