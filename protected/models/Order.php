<?php

/**
 * This is the model class for table "transaction_detail".
 *
 * The followings are the available columns in table 'transaction_detail':
 * @property integer $id_transaction_detail
 * @property integer $transaction_id
 * @property integer $product_id
 * @property integer $size
 * @property integer $color
 * @property integer $quantity
 * @property integer $status
 * @property integer $customer_id
 */
class Order extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'transaction_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('transaction_id, product_id, size, color, quantity, status, customer_id', 'required'),
			array('transaction_id, product_id, size, color, quantity, status, customer_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_transaction_detail, transaction_id, product_id, size, color, quantity, status, customer_id', 'safe', 'on'=>'search'),
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
			'Product'=>array(self::BELONGS_TO,'Product','product_id'),
			'Customer'=>array(self::BELONGS_TO,'User','customer_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_transaction_detail' => 'Id Transaction Detail',
			'transaction_id' => 'Transaction',
			'product_id' => 'Product',
			'size' => 'Size',
			'color' => 'Color',
			'quantity' => 'Quantity',
			'status' => 'Status',
			'customer_id' => 'Costumer',
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

		$criteria->compare('id_transaction_detail',$this->id_transaction_detail);
		$criteria->compare('transaction_id',$this->transaction_id);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('size',$this->size);
		$criteria->compare('color',$this->color);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('status',$this->status);
		$criteria->compare('customer_id',$this->customer_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Order the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
