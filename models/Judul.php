<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "judul".
 *
 * @property integer $id
 * @property string $judul
 * @property integer $created_at
 * @property integer $updated_at
 */
class Judul extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'judul';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
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
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
