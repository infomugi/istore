<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property integer $id_product
 * @property string $code
 * @property string $name
 * @property string $description
 * @property integer $category_id
 * @property integer $sub_category_id
 * @property integer $image
 * @property integer $price 
 * @property integer $color
 * @property integer $status
 * @property integer $stock
 * @property string $spesification
 * @property integer $weight
 * @property integer $brand_id
 * @property integer $views
 * @property integer $likes
 * @property integer $discount
 * @property integer $created_id
 * @property integer $update_id
 * @property integer $created_date
 * @property integer $update_date
 * @property string $keyword
 * @property string $abstrack
 * @property integer $sales
 * @property integer $rate
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code, name, description, category_id, sub_category_id, color, status, stock, spesification, weight, brand_id, views, likes, discount, created_id, update_id, created_date, update_date, keyword, abstrack, sales, rate, image', 'required'),
			array('category_id, sub_category_id, color, status, stock, weight, brand_id, views, likes, discount, created_id, update_id, sales, rate', 'numerical', 'integerOnly'=>true),
			array('code', 'length', 'max'=>50),
			array('name, abstrack, image', 'length', 'max'=>255),
			array('keyword', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_product, code, name, description, category_id, sub_category_id, color, status, stock, spesification, weight, brand_id, views, likes, discount, created_id, update_id, created_date, update_date, keyword, abstrack, sales, rate', 'safe', 'on'=>'search'),
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
			'Category'=>array(self::BELONGS_TO,'Category','category_id'),
			'Tag'=>array(self::BELONGS_TO,'Tag','sub_category_id'),
			'Created'=>array(self::BELONGS_TO,'User','created_id'),
			'Update'=>array(self::BELONGS_TO,'User','update_id'),
			'Brand'=>array(self::BELONGS_TO,'Brand','brand_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_product' => 'Id Product',
			'code' => 'Code',
			'name' => 'Name',
			'description' => 'Description',
			'category_id' => 'Category',
			'sub_category_id' => 'Sub Category',
			'color' => 'Color',
			'status' => 'Status',
			'stock' => 'Stock',
			'spesification' => 'Spesification',
			'weight' => 'Weight',
			'brand_id' => 'Brand',
			'views' => 'Views',
			'likes' => 'Likes',
			'discount' => 'Discount',
			'created_id' => 'Created',
			'update_id' => 'Update',
			'created_date' => 'Created Date',
			'update_date' => 'Update Date',
			'keyword' => 'Keyword',
			'abstrack' => 'Abstrack',
			'sales' => 'Sales',
			'rate' => 'Rate',
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

		$criteria->compare('id_product',$this->id_product);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('sub_category_id',$this->sub_category_id);
		$criteria->compare('color',$this->color);
		$criteria->compare('status',$this->status);
		$criteria->compare('stock',$this->stock);
		$criteria->compare('spesification',$this->spesification,true);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('views',$this->views);
		$criteria->compare('likes',$this->likes);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('created_id',$this->created_id);
		$criteria->compare('update_id',$this->update_id);
		$criteria->compare('created_date',$this->created_date);
		$criteria->compare('update_date',$this->update_date);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('abstrack',$this->abstrack,true);
		$criteria->compare('sales',$this->sales);
		$criteria->compare('rate',$this->rate);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function seo($title){
		return preg_replace('/[^a-z0-9_-]/i', '', strtolower(str_replace(' ', '-', trim($title))));
	}		

	public function color($data){
		if($data==1){
			return "White";
		}else if($data==2){
			return "Red";
		}else if($data==3){
			return "Blue";
		}else if($data==4){
			return "Green";
		}else if($data==5){
			return "Yellow";
		}else{
			return "Brown";
		}
	}

	public function status($data){
		if($data==1){
			return "New";
		}else if($data==2){
			return "Sale";
		}else{
			return "Sold";
		}
	}	
}
