<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fenomena".
 *
 * @property integer $id
 * @property string $a_qtoq
 * @property string $a_ytoy
 * @property string $a_laju_implisit
 * @property string $b_qtoq
 * @property string $b_ytoy
 * @property string $b_laju_implisit
 * @property string $c_qtoq
 * @property string $c_ytoy
 * @property string $c_laju_implisit
 * @property string $d_qtoq
 * @property string $d_ytoy
 * @property string $d_laju_implisit
 * @property string $e_qtoq
 * @property string $e_ytoy
 * @property string $e_laju_implisit
 * @property string $f_qtoq
 * @property string $f_ytoy
 * @property string $f_laju_implisit
 * @property string $g_qtoq
 * @property string $g_ytoy
 * @property string $g_laju_implisit
 * @property string $h_qtoq
 * @property string $h_ytoy
 * @property string $h_laju_implisit
 * @property string $i_qtoq
 * @property string $i_ytoy
 * @property string $i_laju_implisit
 * @property string $j_qtoq
 * @property string $j_ytoy
 * @property string $j_laju_implisit
 * @property string $k_qtoq
 * @property string $k_ytoy
 * @property string $k_laju_implisit
 * @property string $l_qtoq
 * @property string $l_ytoy
 * @property string $l_laju_implisit
 * @property string $m_qtoq
 * @property string $m_ytoy
 * @property string $m_laju_implisit
 * @property string $o_qtoq
 * @property string $o_ytoy
 * @property string $o_laju_implisit
 * @property string $p_qtoq
 * @property string $p_ytoy
 * @property string $p_laju_implisit
 * @property string $q_qtoq
 * @property string $q_ytoy
 * @property string $q_laju_implisit
 * @property string $r_qtoq
 * @property string $r_ytoy
 * @property string $r_laju_implisit
 * @property integer $id_kab
 * @property integer $triwulan
 * @property integer $tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Fenomena extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fenomena';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_qtoq', 'a_ytoy', 'a_laju_implisit', 'b_qtoq', 'b_ytoy', 'b_laju_implisit', 'c_qtoq', 'c_ytoy', 'c_laju_implisit', 'd_qtoq', 'd_ytoy', 'd_laju_implisit', 'e_qtoq', 'e_ytoy', 'e_laju_implisit', 'f_qtoq', 'f_ytoy', 'f_laju_implisit', 'g_qtoq', 'g_ytoy', 'g_laju_implisit', 'h_qtoq', 'h_ytoy', 'h_laju_implisit', 'i_qtoq', 'i_ytoy', 'i_laju_implisit', 'j_qtoq', 'j_ytoy', 'j_laju_implisit', 'k_qtoq', 'k_ytoy', 'k_laju_implisit', 'l_qtoq', 'l_ytoy', 'l_laju_implisit', 'm_qtoq', 'm_ytoy', 'm_laju_implisit', 'o_qtoq', 'o_ytoy', 'o_laju_implisit', 'p_qtoq', 'p_ytoy', 'p_laju_implisit', 'q_qtoq', 'q_ytoy', 'q_laju_implisit', 'r_qtoq', 'r_ytoy', 'r_laju_implisit'], 'string'],
            [['id_kab', 'triwulan', 'tahun', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'a_qtoq' => 'A Qtoq',
            'a_ytoy' => 'A Ytoy',
            'a_laju_implisit' => 'A Laju Implisit',
            'b_qtoq' => 'B Qtoq',
            'b_ytoy' => 'B Ytoy',
            'b_laju_implisit' => 'B Laju Implisit',
            'c_qtoq' => 'C Qtoq',
            'c_ytoy' => 'C Ytoy',
            'c_laju_implisit' => 'C Laju Implisit',
            'd_qtoq' => 'D Qtoq',
            'd_ytoy' => 'D Ytoy',
            'd_laju_implisit' => 'D Laju Implisit',
            'e_qtoq' => 'E Qtoq',
            'e_ytoy' => 'E Ytoy',
            'e_laju_implisit' => 'E Laju Implisit',
            'f_qtoq' => 'F Qtoq',
            'f_ytoy' => 'F Ytoy',
            'f_laju_implisit' => 'F Laju Implisit',
            'g_qtoq' => 'G Qtoq',
            'g_ytoy' => 'G Ytoy',
            'g_laju_implisit' => 'G Laju Implisit',
            'h_qtoq' => 'H Qtoq',
            'h_ytoy' => 'H Ytoy',
            'h_laju_implisit' => 'H Laju Implisit',
            'i_qtoq' => 'I Qtoq',
            'i_ytoy' => 'I Ytoy',
            'i_laju_implisit' => 'I Laju Implisit',
            'j_qtoq' => 'J Qtoq',
            'j_ytoy' => 'J Ytoy',
            'j_laju_implisit' => 'J Laju Implisit',
            'k_qtoq' => 'K Qtoq',
            'k_ytoy' => 'K Ytoy',
            'k_laju_implisit' => 'K Laju Implisit',
            'l_qtoq' => 'L Qtoq',
            'l_ytoy' => 'L Ytoy',
            'l_laju_implisit' => 'L Laju Implisit',
            'm_qtoq' => 'M Qtoq',
            'm_ytoy' => 'M Ytoy',
            'm_laju_implisit' => 'M Laju Implisit',
            'o_qtoq' => 'O Qtoq',
            'o_ytoy' => 'O Ytoy',
            'o_laju_implisit' => 'O Laju Implisit',
            'p_qtoq' => 'P Qtoq',
            'p_ytoy' => 'P Ytoy',
            'p_laju_implisit' => 'P Laju Implisit',
            'q_qtoq' => 'Q Qtoq',
            'q_ytoy' => 'Q Ytoy',
            'q_laju_implisit' => 'Q Laju Implisit',
            'r_qtoq' => 'R Qtoq',
            'r_ytoy' => 'R Ytoy',
            'r_laju_implisit' => 'R Laju Implisit',
            'id_kab' => 'Id Kab',
            'triwulan' => 'Triwulan',
            'tahun' => 'Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
