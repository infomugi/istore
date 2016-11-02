<?php
/* @var $this SiteController */
$this->pageTitle='Beranda';
?>

<section class="process-section">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="icon-box"><i class="fa fa-tasks"></i></div>
				<div class="text-box">
					<h4>INFORMASI</h4>
					<p>Informasi Data Disnaker.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="icon-box"><i class="fa fa-user-secret"></i></div>
				<div class="text-box">
					<h4>INTEGRASI</h4>
					<p>Integrasi Data Disnaker.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="icon-box"><i class="fa fa-check-square-o"></i></div>
				<div class="text-box">
					<h4>VERIFIKASI</h4>
					<p>Verifikasi Data Disnaker.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="call-action-section">
	<div class="container">
		<div class="col-md-8">
			<div class="text-box">
				<h2>Selamat Datang, <?PHP echo ucfirst(YII::app()->user->name); ?> </h2>
			</div>
		</div>
		<div class="col-md-4">

			<?php echo CHtml::link('Isi Data',
				array('umpi/tambah'),
				array('class' => 'btn-get','title'=>'Isi Data Keluarga Tidak Bekerja'));
				?>

			</div>
		</div>
	</section>

	<section class="process-section">
		<div class="container">
			<div class="row">

				<?php 
				$this->widget('zii.widgets.CListView', array(
					'dataProvider'=>$dataProvider,
					'itemView'=>'_view_kecamatan',
					)); ?>

				</div>
			</div>
		</section>

		<style type="text/css">
			.data{margin-bottom: 15px;}
			.text-box{margin-top: 22px;}
			.icon-box{background: #000;}
		</style>