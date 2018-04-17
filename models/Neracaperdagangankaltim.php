<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "neracaperdagangankaltim".
 *
 * @property integer $id
 * @property double $ekspor
 * @property double $impor
 * @property double $neracaperdagangan
 * @property string $fenomena
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Neracaperdagangankaltim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'neracaperdagangankaltim';
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
            [['ekspor', 'impor', 'neracaperdagangan'], 'number'],
            [['fenomena'], 'string'],
            [['id_satuan', 'id_tahun'], 'required'],
            [['id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ekspor' => 'Ekspor',
            'impor' => 'Impor',
            'neracaperdagangan' => 'Neraca perdagangan',
            'fenomena' => 'Fenomena',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
