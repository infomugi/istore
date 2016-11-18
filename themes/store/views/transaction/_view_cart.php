<?php
$jumlahbeli = Yii::app()->db->createCommand('
  SELECT SUM(quantity) 
  FROM transaction_detail 
  WHERE STATUS = 1
  AND customer_id='.$data->customer_id.' 
  AND transaction_id ='.$data->transaction_id.' 
  AND product_id='.$data->product_id.' 
  GROUP by product_id
  ')->queryScalar();

$subtotal = $data->Product->price * $jumlahbeli;
?>

<tr>
<td class="cart_product">
  <a href=""><img src="<?php echo YII::app()->baseUrl."/image/product/big/".$data->Product->image; ?>"/></a>
</td>
<td class="cart_description"><p class="product-name"><a href=""><?PHP echo $data->Product->name; ?></a></p>
  <!-- <small><a href="">Color : <?PHP echo Product::model()->color($data->Product->color); ?></a></small><br> -->
  <!-- <small><a href="">Size : <?PHP echo $data->size; ?></a></small></td> -->
  <td class="availability in-stock"><span class="label label-info"><?PHP echo Product::model()->status($data->Product->status); ?></span></td>
  <td class="price"><span><?PHP echo Yii::app()->numberFormatter->format("Rp ###,###,###",$data->Product->price); ?></span></td>
  <td class="qty"><input class="form-control input-sm" type="text" disabled="true" value="<?php echo $jumlahbeli; ?>"></td>
  <td class="price"><span><?PHP echo Yii::app()->numberFormatter->format("Rp ###,###,###", $subtotal); ?></span></td>
</tr>

