<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perkebunansemusim".
 *
 * @property integer $id
 * @property double $tebu
 * @property double $jarak_pagar
 * @property double $kenaf
 * @property double $kapas
 * @property double $lainnya
 * @property string $fenomena
 * @property integer $id_wil
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Perkebunansemusim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perkebunansemusim';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tebu', 'jarak_pagar', 'kenaf', 'kapas', 'lainnya'], 'number'],
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
            'tebu' => 'Tebu',
            'jarak_pagar' => 'Jarak Pagar',
            'kenaf' => 'Kenaf',
            'kapas' => 'Kapas',
            'lainnya' => 'Lainnya',
            'fenomena' => 'Fenomena',
            'id_wil' => 'Id Wil',
            'id_satuan' => 'Id Satuan',
            'id_tahun' => 'Id Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
