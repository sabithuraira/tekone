<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vlmebongkarkaltara".
 *
 * @property integer $id
 * @property double $lingkastarakan
 * @property double $nunukan
 * @property double $bunyu
 * @property double $tanjungselor
 * @property double $tarakanu
 * @property double $juatatarakan
 * @property double $jumlahtotal
 * @property string $fenomena
 * @property integer $id_wil
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Vlmebongkarkaltara extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vlmebongkarkaltara';
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
            [['lingkastarakan', 'nunukan', 'bunyu', 'tanjungselor', 'tarakanu', 'juatatarakan', 'jumlahtotal'], 'number'],
            [['fenomena'], 'string'],
            [['id_wil', 'id_satuan', 'id_tahun'], 'required'],
            [['id_wil', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lingkastarakan' => 'Lingkastarakan',
            'nunukan' => 'Nunukan',
            'bunyu' => 'Bunyu',
            'tanjungselor' => 'Tanjungselor',
            'tarakanu' => 'Tarakanu',
            'juatatarakan' => 'Juatatarakan',
            'jumlahtotal' => 'Jumlahtotal',
            'fenomena' => 'Fenomena',
            'id_wil' => 'Wilayah',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}