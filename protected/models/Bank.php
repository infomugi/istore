<?php

/**
 * This is the model class for table "bank".
 *
 * The followings are the available columns in table 'bank':
 * @property integer $id_bank
 * @property string $name
 * @property string $code
 * @property string $branch
 * @property integer $status
 * @property integer $user_id
 * @property integer $verification_id
 * @property string $date_created
 * @property string $date_verification
 */
class Bank extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bank';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, code, branch, status, user_id, verification_id, date_created, date_verification', 'required'),
			array('status, user_id, verification_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('code, branch', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_bank, name, code, branch, status, user_id, verification_id, date_created, date_verification', 'safe', 'on'=>'search'),
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
			'id_bank' => 'Id Bank',
			'name' => 'Name',
			'code' => 'Code',
			'branch' => 'Branch',
			'status' => 'Status',
			'user_id' => 'User',
			'verification_id' => 'Verification',
			'date_created' => 'Date Created',
			'date_verification' => 'Date Verification',
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

		$criteria->compare('id_bank',$this->id_bank);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('branch',$this->branch,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('verification_id',$this->verification_id);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('date_verification',$this->date_verification,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bank the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
