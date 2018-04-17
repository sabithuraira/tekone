<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ctoc".
 *
 * @property integer $id
 * @property double $a
 * @property double $b
 * @property double $c
 * @property double $d
 * @property double $e
 * @property double $f
 * @property double $g
 * @property double $h
 * @property double $i
 * @property double $j
 * @property double $k
 * @property double $l
 * @property double $m
 * @property double $o
 * @property double $p
 * @property double $q
 * @property double $r
 * @property double $pdrb
 * @property double $pdrb_tanpa_migas
 * @property integer $triwulan
 * @property integer $tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pertumbuhan_pdrb_pengeluaran_td_2010_adh_konstan_ctoc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'o', 'p', 'q', 'r', 'pdrb', 'pdrb_tanpa_migas'], 'number'],
            [['triwulan', 'tahun', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'a' => 'A',
            'b' => 'B',
            'c' => 'C',
            'd' => 'D',
            'e' => 'E',
            'f' => 'F',
            'g' => 'G',
            'h' => 'H',
            'i' => 'I',
            'j' => 'J',
            'k' => 'K',
            'l' => 'L',
            'm' => 'M',
            'o' => 'O',
            'p' => 'P',
            'q' => 'Q',
            'r' => 'R',
            'pdrb' => 'Pdrb',
            'pdrb_tanpa_migas' => 'Pdrb Tanpa Migas',
            'triwulan' => 'Triwulan',
            'tahun' => 'Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
