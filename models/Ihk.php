<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ihk".
 *
 * @property integer $id
 * @property double $bahanmakanan
 * @property double $padipadianumbiumbianhasilnya
 * @property double $daginghasil
 * @property double $ikansegar
 * @property double $ikandiawetkan
 * @property double $telursusuhasilnya
 * @property double $sayursayuran
 * @property double $kacangkacangan
 * @property double $buahbuahan
 * @property double $bumbubumbuan
 * @property double $lemakdanminyak
 * @property double $bahanmakananlainnya
 * @property double $makananjadirokoktembakau
 * @property double $makananjadi
 * @property double $minumanyangtdkberalkohol
 * @property double $tembakaudanminumanberalkohol
 * @property double $perumahan
 * @property double $biayatempattinggal
 * @property double $bahanbakarpeneranganair
 * @property double $perlengkapanrumahtangga
 * @property double $penyelenggaraanrumahtangga
 * @property double $sandang
 * @property double $sandanglakilaki
 * @property double $sandangwanita
 * @property double $sandanganakanak
 * @property double $barangpribadisandanglainnya
 * @property double $kesehatan
 * @property double $jasakesehatan
 * @property double $obatobatan
 * @property double $jasaperawatanjasmani
 * @property double $perawatanjasmanidankosmetik
 * @property double $pendidikanrekreasidanolahraga
 * @property double $jasapendidikan
 * @property double $kursuskursuspelatihan
 * @property double $perlengkapanperalatanpendidikan
 * @property double $rekreasi
 * @property double $olahraga
 * @property double $transpordankomunikasi
 * @property double $transport
 * @property double $komunikasidanpengiriman
 * @property double $saranadanpenunjangtranspor
 * @property double $jasakeuangan
 * @property string $fenomena
 * @property integer $id_wil
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $id_bulan
 * @property integer $created_at
 * @property integer $updated_at
 */
class Ihk extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ihk';
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
            [['bahanmakanan', 'padipadianumbiumbianhasilnya', 'daginghasil', 'ikansegar', 'ikandiawetkan', 'telursusuhasilnya', 'sayursayuran', 'kacangkacangan', 'buahbuahan', 'bumbubumbuan', 'lemakdanminyak', 'bahanmakananlainnya', 'makananjadirokoktembakau', 'makananjadi', 'minumanyangtdkberalkohol', 'tembakaudanminumanberalkohol', 'perumahan', 'biayatempattinggal', 'bahanbakarpeneranganair', 'perlengkapanrumahtangga', 'penyelenggaraanrumahtangga', 'sandang', 'sandanglakilaki', 'sandangwanita', 'sandanganakanak', 'barangpribadisandanglainnya', 'kesehatan', 'jasakesehatan', 'obatobatan', 'jasaperawatanjasmani', 'perawatanjasmanidankosmetik', 'pendidikanrekreasidanolahraga', 'jasapendidikan', 'kursuskursuspelatihan', 'perlengkapanperalatanpendidikan', 'rekreasi', 'olahraga', 'transpordankomunikasi', 'transport', 'komunikasidanpengiriman', 'saranadanpenunjangtranspor', 'jasakeuangan'], 'number'],
            [['fenomena'], 'string'],
            [['id_wil', 'id_satuan', 'id_tahun', 'id_bulan'], 'required'],
            [['id_wil', 'id_satuan', 'id_tahun', 'id_bulan', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bahanmakanan' => 'Bahanmakanan',
            'padipadianumbiumbianhasilnya' => 'Padipadianumbiumbianhasilnya',
            'daginghasil' => 'Daginghasil',
            'ikansegar' => 'Ikansegar',
            'ikandiawetkan' => 'Ikandiawetkan',
            'telursusuhasilnya' => 'Telursusuhasilnya',
            'sayursayuran' => 'Sayursayuran',
            'kacangkacangan' => 'Kacangkacangan',
            'buahbuahan' => 'Buahbuahan',
            'bumbubumbuan' => 'Bumbubumbuan',
            'lemakdanminyak' => 'Lemakdanminyak',
            'bahanmakananlainnya' => 'Bahanmakananlainnya',
            'makananjadirokoktembakau' => 'Makananjadirokoktembakau',
            'makananjadi' => 'Makananjadi',
            'minumanyangtdkberalkohol' => 'Minumanyangtdkberalkohol',
            'tembakaudanminumanberalkohol' => 'Tembakaudanminumanberalkohol',
            'perumahan' => 'Perumahan',
            'biayatempattinggal' => 'Biayatempattinggal',
            'bahanbakarpeneranganair' => 'Bahanbakarpeneranganair',
            'perlengkapanrumahtangga' => 'Perlengkapanrumahtangga',
            'penyelenggaraanrumahtangga' => 'Penyelenggaraanrumahtangga',
            'sandang' => 'Sandang',
            'sandanglakilaki' => 'Sandanglakilaki',
            'sandangwanita' => 'Sandangwanita',
            'sandanganakanak' => 'Sandanganakanak',
            'barangpribadisandanglainnya' => 'Barangpribadisandanglainnya',
            'kesehatan' => 'Kesehatan',
            'jasakesehatan' => 'Jasakesehatan',
            'obatobatan' => 'Obatobatan',
            'jasaperawatanjasmani' => 'Jasaperawatanjasmani',
            'perawatanjasmanidankosmetik' => 'Perawatanjasmanidankosmetik',
            'pendidikanrekreasidanolahraga' => 'Pendidikanrekreasidanolahraga',
            'jasapendidikan' => 'Jasapendidikan',
            'kursuskursuspelatihan' => 'Kursuskursuspelatihan',
            'perlengkapanperalatanpendidikan' => 'Perlengkapanperalatanpendidikan',
            'rekreasi' => 'Rekreasi',
            'olahraga' => 'Olahraga',
            'transpordankomunikasi' => 'Transpordankomunikasi',
            'transport' => 'Transport',
            'komunikasidanpengiriman' => 'Komunikasidanpengiriman',
            'saranadanpenunjangtranspor' => 'Saranadanpenunjangtranspor',
            'jasakeuangan' => 'Jasakeuangan',
            'fenomena' => 'Fenomena',
            'id_wil' => 'Wilayah',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'id_bulan' => 'Bulan',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
