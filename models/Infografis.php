<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "infografis".
 *
 * @property integer $id
 * @property string $judul
 * @property string $keterangan
 * @property string $link
 * @property integer $created_at
 * @property integer $updated_at
 */
class Infografis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'infografis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keterangan', 'link'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['judul'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'keterangan' => 'Keterangan',
            'link' => 'Link',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
