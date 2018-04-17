<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "impormenurutbeberapagolongan".
 *
 * @property integer $id
 * @property double $bahanbakarmineral
 * @property double $migas
 * @property double $nonmigas
 * @property double $mesindanperalatanmekanik
 * @property double $kendaraanbermotordanbagiannya
 * @property double $barangdaribesiataubaja
 * @property double $bahanpeledakprodukpiroteknikkorekapi
 * @property double $mesindanperalatanlistrik
 * @property double $karetdanbarangdaripadanya
 * @property double $mutiaraalammutiarabudidayabatumuliaatausemimulia
 * @property double $anekaprodukkimia
 * @property double $instrumendanaparatusoptisfotografisinematografi
 * @property double $total10golonganbarang
 * @property double $lainnya
 * @property double $totalimpor
 * @property string $fenomena
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $id_bulan
 * @property integer $created_at
 * @property integer $updated_at
 */
class Impormenurutbeberapagolongan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'impormenurutbeberapagolongan';
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
            [['bahanbakarmineral', 'migas', 'nonmigas', 'mesindanperalatanmekanik', 'kendaraanbermotordanbagiannya', 'barangdaribesiataubaja', 'bahanpeledakprodukpiroteknikkorekapi', 'mesindanperalatanlistrik', 'karetdanbarangdaripadanya', 'mutiaraalammutiarabudidayabatumuliaatausemimulia', 'anekaprodukkimia', 'instrumendanaparatusoptisfotografisinematografi', 'total10golonganbarang', 'lainnya', 'totalimpor'], 'number'],
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
            'bahanbakarmineral' => 'Bahan bakar mineral',
            'migas' => 'Migas',
            'nonmigas' => 'Non migas',
            'mesindanperalatanmekanik' => 'Mesin dan peralatan mekanik',
            'kendaraanbermotordanbagiannya' => 'Kendaraan bermotor dan bagiannya',
            'barangdaribesiataubaja' => 'Barang dari besi atau baja',
            'bahanpeledakprodukpiroteknikkorekapi' => 'Bahan peledak produk piroteknik korek api',
            'mesindanperalatanlistrik' => 'Mesin dan peralatan listrik',
            'karetdanbarangdaripadanya' => 'Karet dan barang dari padanya',
            'mutiaraalammutiarabudidayabatumuliaatausemimulia' => 'Mutiara alam mutiara budidaya batu mulia atau semi mulia',
            'anekaprodukkimia' => 'Aneka produk kimia',
            'instrumendanaparatusoptisfotografisinematografi' => 'Instrumen dan aparatusoptis fotografi sinematografi',
            'total10golonganbarang' => 'Total 10 golongan barang',
            'lainnya' => 'Lainnya',
            'totalimpor' => 'Totalimpor',
            'fenomena' => 'Fenomena',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'id_bulan' => 'Bulan',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
