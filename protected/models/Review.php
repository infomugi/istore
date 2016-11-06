<?php

/**
 * This is the model class for table "product_review".
 *
 * The followings are the available columns in table 'product_review':
 * @property integer $id_product_review
 * @property string $date
 * @property integer $customer_id
 * @property integer $price
 * @property integer $value
 * @property integer $quality
 * @property integer $summary
 * @property string $description
 * @property integer $status
 */
class Review extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_review';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, customer_id, price, value, quality, summary, description, status', 'required'),
			array('customer_id, price, value, quality, summary, status', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_product_review, date, customer_id, price, value, quality, summary, description, status', 'safe', 'on'=>'search'),
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
			'id_product_review' => 'Id Product Review',
			'date' => 'Date',
			'customer_id' => 'Customer',
			'price' => 'Price',
			'value' => 'Value',
			'quality' => 'Quality',
			'summary' => 'Summary',
			'description' => 'Description',
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

		$criteria->compare('id_product_review',$this->id_product_review);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('price',$this->price);
		$criteria->compare('value',$this->value);
		$criteria->compare('quality',$this->quality);
		$criteria->compare('summary',$this->summary);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Review the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
