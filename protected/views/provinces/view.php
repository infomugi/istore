<?php
/* @var $this ProvincesController */
/* @var $model Provinces */

$this->breadcrumbs=array(
	'Provinces'=>array('index'),
	$model->name,
	);

$this->pageTitle='Detail Provinces';
?>


<section class="col-xs-12">

	<?php echo CHtml::link('List',
		array('index'),
		array('class' => 'btn btn-success', 'title'=>'List Provinces'));
		?>
		<?php echo CHtml::link('Manage',
			array('admin'),
			array('class' => 'btn btn-success','title'=>'Manage Provinces'));
			?>

			<HR>

				<?php $this->widget('zii.widgets.CDetailView', array(
					'data'=>$model,
					'htmlOptions'=>array("class"=>"table"),
					'attributes'=>array(
						'id',
						'name',
						),
						)); ?>

					</section>

					<STYLE>
						th{width:150px;}
					</STYLE>

