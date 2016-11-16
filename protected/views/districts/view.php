<?php
/* @var $this DistrictsController */
/* @var $model Districts */

$this->breadcrumbs=array(
	'Districts'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Districts';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('List',
		array('index'),
		array('class' => 'btn btn-success', 'title'=>'List Districts'));
		?>
		<?php echo CHtml::link('Manage',
			array('admin'),
			array('class' => 'btn btn-success','title'=>'Manage Districts'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'id',
						'regency_id',
						'name',
						),
						)); ?>

					</section>

					<STYLE>
						th{width:150px;}
					</STYLE>

