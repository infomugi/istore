<?php

/**
 * This is the model class for table "transaction".
 *
 * The followings are the available columns in table 'transaction':
 * @property integer $id_transaction
 * @property string $code
 * @property string $date_order
 * @property string $date_confirmation
 * @property string $date_verification
 * @property integer $customer_id
 * @property integer $confirmation_id
 * @property integer $verification_id
 * @property integer $payment_method
 * @property integer $payment_total
 * @property string $payment_file
 * @property integer $shipping_type
 * @property integer $shipping_brand
 * @property integer $shipping_code
 * @property integer $status
 */
class Transaction extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, date_order, date_confirmation, date_verification, customer_id, confirmation_id, verification_id, payment_method, payment_total, payment_file, shipping_type, shipping_brand, shipping_code, status', 'required'),
			array('customer_id, confirmation_id, verification_id, payment_method, payment_total, shipping_type, shipping_brand, shipping_code, status', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>25),
			array('payment_file', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_transaction, code, date_order, date_confirmation, date_verification, customer_id, confirmation_id, verification_id, payment_method, payment_total, payment_file, shipping_type, shipping_brand, shipping_code, status', 'safe', 'on'=>'search'),
			);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_transaction' => 'Id Transaction',
			'code' => 'Code',
			'date_order' => 'Date Order',
			'date_confirmation' => 'Date Confirmation',
			'date_verification' => 'Date Verification',
			'customer_id' => 'Customer',
			'confirmation_id' => 'Confirmation',
			'verification_id' => 'Verification',
			'payment_method' => 'Payment Method',
			'payment_total' => 'Payment Total',
			'payment_file' => 'Payment File',
			'shipping_type' => 'Shipping Type',
			'shipping_brand' => 'Shipping Brand',
			'shipping_code' => 'Shipping Code',
			'status' => 'Status',
			);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_transaction',$this->id_transaction);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('date_order',$this->date_order,true);
		$criteria->compare('date_confirmation',$this->date_confirmation,true);
		$criteria->compare('date_verification',$this->date_verification,true);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('confirmation_id',$this->confirmation_id);
		$criteria->compare('verification_id',$this->verification_id);
		$criteria->compare('payment_method',$this->payment_method);
		$criteria->compare('payment_total',$this->payment_total);
		$criteria->compare('payment_file',$this->payment_file,true);
		$criteria->compare('shipping_type',$this->shipping_type);
		$criteria->compare('shipping_brand',$this->shipping_brand);
		$criteria->compare('shipping_code',$this->shipping_code);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Transaction the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function total(){
		$jumlahbeli = Yii::app()->db->createCommand('
			SELECT COUNT(id_transaction_detail) FROM transaction_detail WHERE customer_id=2 GROUP BY product_id
			')->queryScalar();

		$criteria= new CDbCriteria();
		$criteria->distinct = true;
		$criteria->group = 'product_id';
		$criteria->order = 'product_id';
		$criteria->condition = 'customer_id='.YII::app()->user->id;
		$totalBeli=new CActiveDataProvider('Order', array(
			'criteria'=>$criteria,
			'pagination'=>false,
			));

		$beli =  $totalBeli->totalItemCount;

		for ($i=0; $i < $beli; $i++) { 
			$total = Yii::app()->db->createCommand('
				SELECT SUM(orders.quantity*product.price) as Jumlah FROM transaction_detail as orders LEFT JOIN product ON orders.product_id=product.id_product WHERE orders.customer_id=2
				')->queryScalar();
		}

		return $total;
	}
}
