<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inputd".
 *
 * @property integer $id
 * @property integer $tahun
 * @property integer $tw
 * @property integer $judul
 * @property integer $kab
 * @property integer $prov
 * @property integer $created_at
 * @property integer $updated_at
 */
class Inputd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inputd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tahun', 'tahuna','tw', 'judul', 'kab', 'prov'], 'required'],
            [['tahun', 'tahuna', 'tw', 'judul', 'kab', 'prov', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tahun' => 'Tahun',
            'tahuna' => 'Tahun Akhir',
            'tw' => 'Triwulan',
            'judul' => 'Judul',
            'kab' => 'Kab',
            'prov' => 'Prov',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
