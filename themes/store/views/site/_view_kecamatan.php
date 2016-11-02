<?php
/* @var $this KecamatanController */
/* @var $data Kecamatan */
$ini = Yii::app()->db->createCommand("SELECT COUNT(kecamatan.kd_kecamatan) 
	FROM umpi LEFT JOIN desa ON umpi.kd_desa = desa.id 
	LEFT JOIN kecamatan on kecamatan.kd_kecamatan = desa.kd_kecamatan 
	WHERE kecamatan.kd_kecamatan = ".$data->kd_kecamatan."")->queryScalar();
?>

<div class="col-md-3 data">
	<div class="icon-box"><?php echo CHtml::encode($ini); ?></div>
	<div class="text-box">
		<h4><?php echo CHtml::encode($data->nama); ?></h4>
	</div>
</div>

