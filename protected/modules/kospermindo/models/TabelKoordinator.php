<?php

/**
 * This is the model class for table "tabel_koordinator".
 *
 * The followings are the available columns in table 'tabel_koordinator':
 * @property integer $id
 * @property string $lokasi
 * @property string $nama_koordinator
 * @property string $deskripsi
 * @property string $id_user
 * @property double $stok_masuk
 * @property double $stok_keluar
 * @property double $jumlah_stok
 * @property string $created_date
 * @property string $created_by
 * @property string $updated_date
 * @property string $updated_by
 * @property integer $status
 */
class TabelKoordinator extends CActiveRecord
{
  public function behaviors()
  {
    return array(
      'LoggableBehavior' => 'application.modules.auditTrail.behaviors.LoggableBehavior',
    );
  }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tabel_koordinator';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lokasi, stok_masuk, stok_keluar, jumlah_stok', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('stok_masuk, stok_keluar, jumlah_stok', 'numerical'),
			array('lokasi, nama_koordinator, deskripsi, id_user', 'length', 'max'=>255),
			array('created_by, updated_by', 'length', 'max'=>150),
			array('created_date, updated_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, lokasi, nama_koordinator, deskripsi, id_user, stok_masuk, stok_keluar, jumlah_stok, created_date, created_by, updated_date, updated_by, status', 'safe', 'on'=>'search'),
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
			'lokasi' => 'Lokasi',
			'nama_koordinator' => 'Nama Koordinator',
			'deskripsi' => 'Deskripsi',
			'id_user' => 'Id User',
			'stok_masuk' => 'Stok Masuk',
			'stok_keluar' => 'Stok Keluar',
			'jumlah_stok' => 'Jumlah Stok',
			'created_date' => 'Created Date',
			'created_by' => 'Created By',
			'updated_date' => 'Updated Date',
			'updated_by' => 'Updated By',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('lokasi',$this->lokasi,true);
		$criteria->compare('nama_koordinator',$this->nama_koordinator,true);
		$criteria->compare('deskripsi',$this->deskripsi,true);
		$criteria->compare('id_user',$this->id_user,true);
		$criteria->compare('stok_masuk',$this->stok_masuk);
		$criteria->compare('stok_keluar',$this->stok_keluar);
		$criteria->compare('jumlah_stok',$this->jumlah_stok);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('updated_date',$this->updated_date,true);
		$criteria->compare('updated_by',$this->updated_by,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TabelKoordinator the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

  /* set created_date and hash the password before save is triggered */
  public function beforeSave()
  {
    if ($this->isNewRecord) {

      $this->created_date = date('Y-m-d H:i:s');
      $this->created_by = Yii::app()->user->getName();

    }else{
      $this->updated_date = date('Y-m-d H:i:s');
      $this->updated_by = Yii::app()->user->getName();
    }

    return parent::beforeSave();
  }
}
