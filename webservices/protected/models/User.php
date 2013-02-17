<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $firstname
 * @property string $surname
 * @property string $birthdate
 * @property string $createdat
 * @property string $password
 * @property integer $secretquestion
 * @property string $answer
 * @property integer $permissiongroup
 * @property string $lastlogin_at
 * @property string $about
 * @property integer $gender
 * @property integer $religion
 * @property string $politicalview
 * @property string $address
 * @property string $city
 * @property integer $zip
 * @property string $web_site
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstname, surname, birthdate, createdat, password, secretquestion, answer, permissiongroup, lastlogin_at, gender, religion, zip', 'required'),
			array('secretquestion, permissiongroup, gender, religion, zip', 'numerical', 'integerOnly'=>true),
			array('firstname, surname, password, answer, about, politicalview, address, city, web_site', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, firstname, surname, birthdate, createdat, password, secretquestion, answer, permissiongroup, lastlogin_at, about, gender, religion, politicalview, address, city, zip, web_site', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'firstname' => 'Firstname',
			'surname' => 'Surname',
			'birthdate' => 'Birthdate',
			'createdat' => 'Createdat',
			'password' => 'Password',
			'secretquestion' => 'Secretquestion',
			'answer' => 'Answer',
			'permissiongroup' => 'Permissiongroup',
			'lastlogin_at' => 'Lastlogin At',
			'about' => 'About',
			'gender' => 'Gender',
			'religion' => 'Religion',
			'politicalview' => 'Politicalview',
			'address' => 'Address',
			'city' => 'City',
			'zip' => 'Zip',
			'web_site' => 'Web Site',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('createdat',$this->createdat,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('secretquestion',$this->secretquestion);
		$criteria->compare('answer',$this->answer,true);
		$criteria->compare('permissiongroup',$this->permissiongroup);
		$criteria->compare('lastlogin_at',$this->lastlogin_at,true);
		$criteria->compare('about',$this->about,true);
		$criteria->compare('gender',$this->gender);
		$criteria->compare('religion',$this->religion);
		$criteria->compare('politicalview',$this->politicalview,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('zip',$this->zip);
		$criteria->compare('web_site',$this->web_site,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}