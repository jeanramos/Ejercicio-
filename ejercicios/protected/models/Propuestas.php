<?php

/**
 * This is the model class for table "propuestas".
 *
 * The followings are the available columns in table 'propuestas':
 * @property integer $id_propuesta
 * @property string $monto
 * @property integer $id_pais_destino
 * @property integer $id_pais_origen
 * @property integer $id_usuario
 *
 * The followings are the available model relations:
 * @property Pais $idPaisDestino
 * @property Pais $idPaisOrigen
 * @property Usuarios $idUsuario
 */
class Propuestas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'propuestas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('monto, id_pais_destino, id_pais_origen, id_usuario', 'required'),
			array('id_pais_destino, id_pais_origen, id_usuario', 'numerical', 'integerOnly'=>true),
			array('monto', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_propuesta, monto, id_pais_destino, id_pais_origen, id_usuario', 'safe', 'on'=>'search'),
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
			'idPaisDestino' => array(self::BELONGS_TO, 'Pais', 'id_pais_destino'),
			'idPaisOrigen' => array(self::BELONGS_TO, 'Pais', 'id_pais_origen'),
			'idUsuario' => array(self::BELONGS_TO, 'Usuarios', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_propuesta' => 'Id Propuesta',
			'monto' => 'Monto',
			'id_pais_destino' => 'Pais Destino',
			'id_pais_origen' => 'Pais Origen',
			'id_usuario' => 'Usuario',
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

		$criteria->compare('id_propuesta',$this->id_propuesta);
		$criteria->compare('monto',$this->monto,true);
		$criteria->compare('id_pais_destino',$this->id_pais_destino);
		$criteria->compare('id_pais_origen',$this->id_pais_origen);
		$criteria->compare('id_usuario',$this->id_usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Propuestas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
