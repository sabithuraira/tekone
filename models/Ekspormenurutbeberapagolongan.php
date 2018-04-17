<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ekspormenurutbeberapagolongan".
 *
 * @property integer $id
 * @property double $bahanbakarmineral
 * @property double $migas
 * @property double $nonmigas
 * @property double $pupuk
 * @property double $lemakdanminyakhewaninabatimalamnabati
 * @property double $bahankimiaanorganik
 * @property double $kayudanbarangdarikayuarangkayu
 * @property double $bahankimiaorganik
 * @property double $anekaprodukkimia
 * @property double $kapalperahudanstrukturterapung
 * @property double $reaktornuklirketelmesindanperalatanmekanis
 * @property double $ikandankrustaseamoluskasertainvertebrataairlainnya
 * @property double $total10golonganbarang
 * @property double $lainnya
 * @property double $totalekspor
 * @property string $fenomena
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $id_bulan
 * @property integer $created_at
 * @property integer $updated_at
 */
class Ekspormenurutbeberapagolongan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ekspormenurutbeberapagolongan';
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
            [['bahanbakarmineral', 'migas', 'nonmigas', 'pupuk', 'lemakdanminyakhewaninabatimalamnabati', 'bahankimiaanorganik', 'kayudanbarangdarikayuarangkayu', 'bahankimiaorganik', 'anekaprodukkimia', 'kapalperahudanstrukturterapung', 'reaktornuklirketelmesindanperalatanmekanis', 'ikandankrustaseamoluskasertainvertebrataairlainnya', 'total10golonganbarang', 'lainnya', 'totalekspor'], 'number'],
            [['fenomena'], 'string'],
            [['id_satuan', 'id_tahun', 'id_bulan'], 'required'],
            [['id_satuan', 'id_tahun', 'id_bulan', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bahanbakarmineral' => 'Bahan Bakar Mineral',
            'migas' => 'Migas',
            'nonmigas' => 'Non Migas',
            'pupuk' => 'Pupuk',
            'lemakdanminyakhewaninabatimalamnabati' => 'Lemak dan minyak hewani nabati malam nabati',
            'bahankimiaanorganik' => 'Bahan kimia anorganik',
            'kayudanbarangdarikayuarangkayu' => 'Kayu dan barang dari kayu / arang kayu',
            'bahankimiaorganik' => 'Bahan kimia organik',
            'anekaprodukkimia' => 'Aneka produk kimia',
            'kapalperahudanstrukturterapung' => 'Kapal perahu dan struktur terapung',
            'reaktornuklirketelmesindanperalatanmekanis' => 'Reaktor nuklir ketel mesin dan peralatan mekanis',
            'ikandankrustaseamoluskasertainvertebrataairlainnya' => 'Ikan dan krustasea moluska serta invertebrata air lainnya',
            'total10golonganbarang' => 'Total 10 golongan barang',
            'lainnya' => 'Lainnya',
            'totalekspor' => 'Total ekspor',
            'fenomena' => 'Fenomena',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'id_bulan' => 'Bulan',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
