<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bi".
 *
 * @property integer $id
 * @property double $kurs
 * @property double $kursjual
 * @property double $kursbeli
 * @property double $kurstengah
 * @property string $fenomena
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $id_bulanan
 * @property integer $created_at
 * @property integer $updated_at
 */
class Bi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bi';
    }

	    public function behaviors()
    {
        return [
            \yii\behaviors\TimestampBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kurs', 'kursjual', 'kursbeli', 'kurstengah'], 'number'],
            [['fenomena'], 'string'],
            [['id_satuan', 'id_tahun', 'id_bulanan'], 'required'],
            [['id_satuan', 'id_tahun', 'id_bulanan', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kurs' => 'Kurs',
            'kursjual' => 'Kurs Jual',
            'kursbeli' => 'Kurs Beli',
            'kurstengah' => 'Kurs Tengah',
            'fenomena' => 'Fenomena',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'id_bulanan' => 'Bulan',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
