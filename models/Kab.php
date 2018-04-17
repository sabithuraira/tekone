<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kab".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $created_at
 * @property integer $updated_at
 */
class Kab extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kab';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nama'], 'required'],
            [['id', 'created_at', 'updated_at'], 'integer'],
            [['nama'], 'string', 'max' => 225],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
