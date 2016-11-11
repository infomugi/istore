<?php
$count = Yii::app()->db->createCommand('SELECT count(quantity) FROM transaction_detail WHERE status=1 AND customer_id='.YII::app()->user->id.' GROUP BY product_id='.$data->product_id.'')->queryScalar();
?>

<tr>
<td class="cart_product">
  <a href=""><img src="<?php echo YII::app()->baseUrl."/image/product/big/".$data->Product->image; ?>"/></a>
</td>
<td class="cart_description"><p class="product-name"><a href=""><?PHP echo $data->Product->name; ?></a></p>
  <small><a href="">Color : <?PHP echo Product::model()->color($data->Product->color); ?></a></small><br>
  <small><a href="">Size : <?PHP echo $data->size; ?></a></small></td>
  <td class="availability in-stock"><span class="label"><?PHP echo Product::model()->status($data->Product->status); ?></span></td>
  <td class="price"><span><?PHP echo $data->Product->price; ?></span></td>
  <td class="qty"><input class="form-control input-sm" type="text" disabled="true" value="<?php echo $count; ?>"></td>
  <td class="price"><span><?PHP echo $data->Product->price * $count; ?></span></td>
  <td class="action"><a href=""><i class="icon-close"></i></a></td>
</tr>