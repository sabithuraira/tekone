<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ihp".
 *
 * @property integer $id
 * @property double $bahanmakanan
 * @property double $padipalawija
 * @property double $padi
 * @property double $palawija
 * @property double $jagungpocelan
 * @property double $ketelapohon
 * @property double $ketelarambat
 * @property double $kacangtanah
 * @property double $kacangkedelai
 * @property double $kacanghijau
 * @property double $bawangdaun
 * @property double $bawangmerah
 * @property double $bayam
 * @property double $buncismuda
 * @property double $cabemerah
 * @property double $caberawit
 * @property double $kacangpanjang
 * @property double $kangkung
 * @property double $ketimun
 * @property double $kolkubis
 * @property double $melinjo
 * @property double $sawihijau
 * @property double $terongpnjng
 * @property double $tomat
 * @property double $wortel
 * @property double $kentang
 * @property double $petai
 * @property double $kacangmerah
 * @property double $alpukat
 * @property double $durian
 * @property double $jambubiji
 * @property double $jeruk
 * @property double $mangga
 * @property double $nanas
 * @property double $pepaya
 * @property double $pisangambon
 * @property double $rambutan
 * @property double $salak
 * @property double $sawo
 * @property double $semangka
 * @property double $duku
 * @property double $nangka
 * @property double $karetgetahtebal
 * @property double $kelapasawit
 * @property double $kopirobusta
 * @property double $kelapablmdikupas
 * @property double $tebu
 * @property double $kakao
 * @property double $jambumete
 * @property double $cengkeh
 * @property double $tembakau
 * @property double $lada
 * @property double $ternak
 * @property double $sapi
 * @property double $kerbau
 * @property double $kambing
 * @property double $babi
 * @property double $sususapisegar
 * @property double $unggashasilnya
 * @property double $ayam
 * @property double $itik
 * @property double $telur
 * @property double $perikananbudidaya
 * @property double $bandeng
 * @property double $gurame
 * @property double $lele
 * @property double $mas
 * @property double $mujair
 * @property double $nila
 * @property double $patin
 * @property double $udangbudidaya
 * @property double $rumputlaut
 * @property double $perikanantngkap
 * @property double $bawal
 * @property double $cakalang
 * @property double $kakap
 * @property double $kembung
 * @property double $kerapu
 * @property double $layang
 * @property double $selar
 * @property double $tembang
 * @property double $tenggiri
 * @property double $teri
 * @property double $tongkol
 * @property double $udangtangkap
 * @property double $kepiting
 * @property double $cumicumi
 * @property double $kayu
 * @property double $kayujati
 * @property double $kayurimbalainnya
 * @property double $hasilhutan
 * @property double $rotan
 * @property double $bambu
 * @property double $batubara
 * @property double $minyakbumi
 * @property double $gasbumidanpanasbumi
 * @property double $bijihtembaga
 * @property double $bijihemas
 * @property double $batu
 * @property double $pasir
 * @property double $kerikil
 * @property double $kapur
 * @property double $dagingsapi
 * @property double $dagingayam
 * @property double $dagingbabi
 * @property double $dagingkambingdomba
 * @property double $dagingolahanawetan
 * @property double $ikanbekuawetan
 * @property double $udangbekuawetan
 * @property double $minyakkelapa
 * @property double $minyakgoreng
 * @property double $minyakkelapasawit
 * @property double $sususegar
 * @property double $susukentalmanis
 * @property double $susububuk
 * @property double $susucairkemasan
 * @property double $eskrim
 * @property double $makanandarisusu
 * @property double $beras
 * @property double $tepungterigu
 * @property double $tepungtapioka
 * @property double $tepungberas
 * @property double $tepunglainnya
 * @property double $pakanikan
 * @property double $pakanlain
 * @property double $roti
 * @property double $biskuit
 * @property double $mie
 * @property double $gulapasir
 * @property double $gulamerah
 * @property double $sirop
 * @property double $kembanggula
 * @property double $coklatbubuk
 * @property double $kopibubuk
 * @property double $teh
 * @property double $kecap
 * @property double $tahutempe
 * @property double $garammeja
 * @property double $kerupukkeripik
 * @property double $airminumkemasan
 * @property double $minumanringan
 * @property double $tehkemasan
 * @property double $rokokkretek
 * @property double $rokokfilter
 * @property double $benangpintal
 * @property double $benangrayon
 * @property double $benangpolyester
 * @property double $kaintenun
 * @property double $kaincetak
 * @property double $lainnya
 * @property double $pakaianbatik
 * @property double $pakaiandarikaos
 * @property double $pakaianpria
 * @property double $pakaianwanita
 * @property double $pakaiananakanak
 * @property double $perlengkapanpakaian
 * @property double $sepatudewasa
 * @property double $sandaldewasa
 * @property double $sepatusandalanakanak
 * @property double $sepatuolahraga
 * @property double $kayujatigergajian
 * @property double $kayulainnya
 * @property double $bahanbangunankayu
 * @property double $kertaskoran
 * @property double $kertastulis
 * @property double $tissue
 * @property double $kertaspembungkus
 * @property double $karton
 * @property double $kartonkemasan
 * @property double $pupukurea
 * @property double $pupuklainnya
 * @property double $pestisidainsektisida
 * @property double $bijiplastik
 * @property double $bahankimia
 * @property double $cattembok
 * @property double $catkayubesi
 * @property double $vernislak
 * @property double $deterjen
 * @property double $sabunmandi
 * @property double $pemutihpewangi
 * @property double $kosmetik
 * @property double $bahankimialain
 * @property double $premium
 * @property double $avtur
 * @property double $solar
 * @property double $aspal
 * @property double $minyakpelumas
 * @property double $rss
 * @property double $sir
 * @property double $banmobil
 * @property double $bansepedamotor
 * @property double $vulkanisirban
 * @property double $pvc
 * @property double $plastik
 * @property double $barangkaretdanplastiklain
 * @property double $kacalembaran
 * @property double $keramik
 * @property double $barangpecahbelah
 * @property double $batubata
 * @property double $genteng
 * @property double $semen
 * @property double $conblock
 * @property double $barangbukanlogamlainnya
 * @property double $bajalembaran
 * @property double $besibeton
 * @property double $besisiku
 * @property double $besiplat
 * @property double $pipabesi
 * @property double $alumunium
 * @property double $seng
 * @property double $murpakubaut
 * @property double $kawat
 * @property double $lainnyadarilogam
 * @property double $mesinpembangkit
 * @property double $mesinindustri
 * @property double $mesinpertanian
 * @property double $alatberat
 * @property double $kabellistrik
 * @property double $prlngkapanlistrik
 * @property double $komputer
 * @property double $televisi
 * @property double $elektroniklainnya
 * @property double $teleponhp
 * @property double $mobil
 * @property double $kapaldanperbaikan
 * @property double $sparepart1
 * @property double $sepedamotor
 * @property double $sparepart2
 * @property double $lainnyaanguktan
 * @property double $furniturekayu
 * @property double $furniturerotan
 * @property double $furniturelogam
 * @property double $barangindustrilainnya
 * @property string $fenomena
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $id_tw
 * @property integer $created_at
 * @property integer $updated_at
 */
class Ihp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ihp';
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
            [['bahanmakanan', 'padipalawija', 'padi', 'palawija', 'jagungpocelan', 'ketelapohon', 'ketelarambat', 'kacangtanah', 'kacangkedelai', 'kacanghijau', 'bawangdaun', 'bawangmerah', 'bayam', 'buncismuda', 'cabemerah', 'caberawit', 'kacangpanjang', 'kangkung', 'ketimun', 'kolkubis', 'melinjo', 'sawihijau', 'terongpnjng', 'tomat', 'wortel', 'kentang', 'petai', 'kacangmerah', 'alpukat', 'durian', 'jambubiji', 'jeruk', 'mangga', 'nanas', 'pepaya', 'pisangambon', 'rambutan', 'salak', 'sawo', 'semangka', 'duku', 'nangka', 'karetgetahtebal', 'kelapasawit', 'kopirobusta', 'kelapablmdikupas', 'tebu', 'kakao', 'jambumete', 'cengkeh', 'tembakau', 'lada', 'ternak', 'sapi', 'kerbau', 'kambing', 'babi', 'sususapisegar', 'unggashasilnya', 'ayam', 'itik', 'telur', 'perikananbudidaya', 'bandeng', 'gurame', 'lele', 'mas', 'mujair', 'nila', 'patin', 'udangbudidaya', 'rumputlaut', 'perikanantngkap', 'bawal', 'cakalang', 'kakap', 'kembung', 'kerapu', 'layang', 'selar', 'tembang', 'tenggiri', 'teri', 'tongkol', 'udangtangkap', 'kepiting', 'cumicumi', 'kayu', 'kayujati', 'kayurimbalainnya', 'hasilhutan', 'rotan', 'bambu', 'batubara', 'minyakbumi', 'gasbumidanpanasbumi', 'bijihtembaga', 'bijihemas', 'batu', 'pasir', 'kerikil', 'kapur', 'dagingsapi', 'dagingayam', 'dagingbabi', 'dagingkambingdomba', 'dagingolahanawetan', 'ikanbekuawetan', 'udangbekuawetan', 'minyakkelapa', 'minyakgoreng', 'minyakkelapasawit', 'sususegar', 'susukentalmanis', 'susububuk', 'susucairkemasan', 'eskrim', 'makanandarisusu', 'beras', 'tepungterigu', 'tepungtapioka', 'tepungberas', 'tepunglainnya', 'pakanikan', 'pakanlain', 'roti', 'biskuit', 'mie', 'gulapasir', 'gulamerah', 'sirop', 'kembanggula', 'coklatbubuk', 'kopibubuk', 'teh', 'kecap', 'tahutempe', 'garammeja', 'kerupukkeripik', 'airminumkemasan', 'minumanringan', 'tehkemasan', 'rokokkretek', 'rokokfilter', 'benangpintal', 'benangrayon', 'benangpolyester', 'kaintenun', 'kaincetak', 'lainnya', 'pakaianbatik', 'pakaiandarikaos', 'pakaianpria', 'pakaianwanita', 'pakaiananakanak', 'perlengkapanpakaian', 'sepatudewasa', 'sandaldewasa', 'sepatusandalanakanak', 'sepatuolahraga', 'kayujatigergajian', 'kayulainnya', 'bahanbangunankayu', 'kertaskoran', 'kertastulis', 'tissue', 'kertaspembungkus', 'karton', 'kartonkemasan', 'pupukurea', 'pupuklainnya', 'pestisidainsektisida', 'bijiplastik', 'bahankimia', 'cattembok', 'catkayubesi', 'vernislak', 'deterjen', 'sabunmandi', 'pemutihpewangi', 'kosmetik', 'bahankimialain', 'premium', 'avtur', 'solar', 'aspal', 'minyakpelumas', 'rss', 'sir', 'banmobil', 'bansepedamotor', 'vulkanisirban', 'pvc', 'plastik', 'barangkaretdanplastiklain', 'kacalembaran', 'keramik', 'barangpecahbelah', 'batubata', 'genteng', 'semen', 'conblock', 'barangbukanlogamlainnya', 'bajalembaran', 'besibeton', 'besisiku', 'besiplat', 'pipabesi', 'alumunium', 'seng', 'murpakubaut', 'kawat', 'lainnyadarilogam', 'mesinpembangkit', 'mesinindustri', 'mesinpertanian', 'alatberat', 'kabellistrik', 'prlngkapanlistrik', 'komputer', 'televisi', 'elektroniklainnya', 'teleponhp', 'mobil', 'kapaldanperbaikan', 'sparepart1', 'sepedamotor', 'sparepart2', 'lainnyaanguktan', 'furniturekayu', 'furniturerotan', 'furniturelogam', 'barangindustrilainnya'], 'number'],
            [['fenomena'], 'string'],
            [['id_satuan', 'id_tahun', 'id_tw'], 'required'],
            [['id_satuan', 'id_tahun', 'id_tw', 'created_at', 'updated_at'], 'integer'],
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
            'padipalawija' => 'Padipalawija',
            'padi' => 'Padi',
            'palawija' => 'Palawija',
            'jagungpocelan' => 'Jagungpocelan',
            'ketelapohon' => 'Ketelapohon',
            'ketelarambat' => 'Ketelarambat',
            'kacangtanah' => 'Kacangtanah',
            'kacangkedelai' => 'Kacangkedelai',
            'kacanghijau' => 'Kacanghijau',
            'bawangdaun' => 'Bawangdaun',
            'bawangmerah' => 'Bawangmerah',
            'bayam' => 'Bayam',
            'buncismuda' => 'Buncismuda',
            'cabemerah' => 'Cabemerah',
            'caberawit' => 'Caberawit',
            'kacangpanjang' => 'Kacangpanjang',
            'kangkung' => 'Kangkung',
            'ketimun' => 'Ketimun',
            'kolkubis' => 'Kolkubis',
            'melinjo' => 'Melinjo',
            'sawihijau' => 'Sawihijau',
            'terongpnjng' => 'Terongpnjng',
            'tomat' => 'Tomat',
            'wortel' => 'Wortel',
            'kentang' => 'Kentang',
            'petai' => 'Petai',
            'kacangmerah' => 'Kacangmerah',
            'alpukat' => 'Alpukat',
            'durian' => 'Durian',
            'jambubiji' => 'Jambubiji',
            'jeruk' => 'Jeruk',
            'mangga' => 'Mangga',
            'nanas' => 'Nanas',
            'pepaya' => 'Pepaya',
            'pisangambon' => 'Pisangambon',
            'rambutan' => 'Rambutan',
            'salak' => 'Salak',
            'sawo' => 'Sawo',
            'semangka' => 'Semangka',
            'duku' => 'Duku',
            'nangka' => 'Nangka',
            'karetgetahtebal' => 'Karetgetahtebal',
            'kelapasawit' => 'Kelapasawit',
            'kopirobusta' => 'Kopirobusta',
            'kelapablmdikupas' => 'Kelapablmdikupas',
            'tebu' => 'Tebu',
            'kakao' => 'Kakao',
            'jambumete' => 'Jambumete',
            'cengkeh' => 'Cengkeh',
            'tembakau' => 'Tembakau',
            'lada' => 'Lada',
            'ternak' => 'Ternak',
            'sapi' => 'Sapi',
            'kerbau' => 'Kerbau',
            'kambing' => 'Kambing',
            'babi' => 'Babi',
            'sususapisegar' => 'Sususapisegar',
            'unggashasilnya' => 'Unggashasilnya',
            'ayam' => 'Ayam',
            'itik' => 'Itik',
            'telur' => 'Telur',
            'perikananbudidaya' => 'Perikananbudidaya',
            'bandeng' => 'Bandeng',
            'gurame' => 'Gurame',
            'lele' => 'Lele',
            'mas' => 'Mas',
            'mujair' => 'Mujair',
            'nila' => 'Nila',
            'patin' => 'Patin',
            'udangbudidaya' => 'Udangbudidaya',
            'rumputlaut' => 'Rumputlaut',
            'perikanantngkap' => 'Perikanantngkap',
            'bawal' => 'Bawal',
            'cakalang' => 'Cakalang',
            'kakap' => 'Kakap',
            'kembung' => 'Kembung',
            'kerapu' => 'Kerapu',
            'layang' => 'Layang',
            'selar' => 'Selar',
            'tembang' => 'Tembang',
            'tenggiri' => 'Tenggiri',
            'teri' => 'Teri',
            'tongkol' => 'Tongkol',
            'udangtangkap' => 'Udangtangkap',
            'kepiting' => 'Kepiting',
            'cumicumi' => 'Cumicumi',
            'kayu' => 'Kayu',
            'kayujati' => 'Kayujati',
            'kayurimbalainnya' => 'Kayurimbalainnya',
            'hasilhutan' => 'Hasilhutan',
            'rotan' => 'Rotan',
            'bambu' => 'Bambu',
            'batubara' => 'Batubara',
            'minyakbumi' => 'Minyakbumi',
            'gasbumidanpanasbumi' => 'Gasbumidanpanasbumi',
            'bijihtembaga' => 'Bijihtembaga',
            'bijihemas' => 'Bijihemas',
            'batu' => 'Batu',
            'pasir' => 'Pasir',
            'kerikil' => 'Kerikil',
            'kapur' => 'Kapur',
            'dagingsapi' => 'Dagingsapi',
            'dagingayam' => 'Dagingayam',
            'dagingbabi' => 'Dagingbabi',
            'dagingkambingdomba' => 'Dagingkambingdomba',
            'dagingolahanawetan' => 'Dagingolahanawetan',
            'ikanbekuawetan' => 'Ikanbekuawetan',
            'udangbekuawetan' => 'Udangbekuawetan',
            'minyakkelapa' => 'Minyakkelapa',
            'minyakgoreng' => 'Minyakgoreng',
            'minyakkelapasawit' => 'Minyakkelapasawit',
            'sususegar' => 'Sususegar',
            'susukentalmanis' => 'Susukentalmanis',
            'susububuk' => 'Susububuk',
            'susucairkemasan' => 'Susucairkemasan',
            'eskrim' => 'Eskrim',
            'makanandarisusu' => 'Makanandarisusu',
            'beras' => 'Beras',
            'tepungterigu' => 'Tepungterigu',
            'tepungtapioka' => 'Tepungtapioka',
            'tepungberas' => 'Tepungberas',
            'tepunglainnya' => 'Tepunglainnya',
            'pakanikan' => 'Pakanikan',
            'pakanlain' => 'Pakanlain',
            'roti' => 'Roti',
            'biskuit' => 'Biskuit',
            'mie' => 'Mie',
            'gulapasir' => 'Gulapasir',
            'gulamerah' => 'Gulamerah',
            'sirop' => 'Sirop',
            'kembanggula' => 'Kembanggula',
            'coklatbubuk' => 'Coklatbubuk',
            'kopibubuk' => 'Kopibubuk',
            'teh' => 'Teh',
            'kecap' => 'Kecap',
            'tahutempe' => 'Tahutempe',
            'garammeja' => 'Garammeja',
            'kerupukkeripik' => 'Kerupukkeripik',
            'airminumkemasan' => 'Airminumkemasan',
            'minumanringan' => 'Minumanringan',
            'tehkemasan' => 'Tehkemasan',
            'rokokkretek' => 'Rokokkretek',
            'rokokfilter' => 'Rokokfilter',
            'benangpintal' => 'Benangpintal',
            'benangrayon' => 'Benangrayon',
            'benangpolyester' => 'Benangpolyester',
            'kaintenun' => 'Kaintenun',
            'kaincetak' => 'Kaincetak',
            'lainnya' => 'Lainnya',
            'pakaianbatik' => 'Pakaianbatik',
            'pakaiandarikaos' => 'Pakaiandarikaos',
            'pakaianpria' => 'Pakaianpria',
            'pakaianwanita' => 'Pakaianwanita',
            'pakaiananakanak' => 'Pakaiananakanak',
            'perlengkapanpakaian' => 'Perlengkapanpakaian',
            'sepatudewasa' => 'Sepatudewasa',
            'sandaldewasa' => 'Sandaldewasa',
            'sepatusandalanakanak' => 'Sepatusandalanakanak',
            'sepatuolahraga' => 'Sepatuolahraga',
            'kayujatigergajian' => 'Kayujatigergajian',
            'kayulainnya' => 'Kayulainnya',
            'bahanbangunankayu' => 'Bahanbangunankayu',
            'kertaskoran' => 'Kertaskoran',
            'kertastulis' => 'Kertastulis',
            'tissue' => 'Tissue',
            'kertaspembungkus' => 'Kertaspembungkus',
            'karton' => 'Karton',
            'kartonkemasan' => 'Kartonkemasan',
            'pupukurea' => 'Pupukurea',
            'pupuklainnya' => 'Pupuklainnya',
            'pestisidainsektisida' => 'Pestisidainsektisida',
            'bijiplastik' => 'Bijiplastik',
            'bahankimia' => 'Bahankimia',
            'cattembok' => 'Cattembok',
            'catkayubesi' => 'Catkayubesi',
            'vernislak' => 'Vernislak',
            'deterjen' => 'Deterjen',
            'sabunmandi' => 'Sabunmandi',
            'pemutihpewangi' => 'Pemutihpewangi',
            'kosmetik' => 'Kosmetik',
            'bahankimialain' => 'Bahankimialain',
            'premium' => 'Premium',
            'avtur' => 'Avtur',
            'solar' => 'Solar',
            'aspal' => 'Aspal',
            'minyakpelumas' => 'Minyakpelumas',
            'rss' => 'Rss',
            'sir' => 'Sir',
            'banmobil' => 'Banmobil',
            'bansepedamotor' => 'Bansepedamotor',
            'vulkanisirban' => 'Vulkanisirban',
            'pvc' => 'Pvc',
            'plastik' => 'Plastik',
            'barangkaretdanplastiklain' => 'Barangkaretdanplastiklain',
            'kacalembaran' => 'Kacalembaran',
            'keramik' => 'Keramik',
            'barangpecahbelah' => 'Barangpecahbelah',
            'batubata' => 'Batubata',
            'genteng' => 'Genteng',
            'semen' => 'Semen',
            'conblock' => 'Conblock',
            'barangbukanlogamlainnya' => 'Barangbukanlogamlainnya',
            'bajalembaran' => 'Bajalembaran',
            'besibeton' => 'Besibeton',
            'besisiku' => 'Besisiku',
            'besiplat' => 'Besiplat',
            'pipabesi' => 'Pipabesi',
            'alumunium' => 'Alumunium',
            'seng' => 'Seng',
            'murpakubaut' => 'Murpakubaut',
            'kawat' => 'Kawat',
            'lainnyadarilogam' => 'Lainnyadarilogam',
            'mesinpembangkit' => 'Mesinpembangkit',
            'mesinindustri' => 'Mesinindustri',
            'mesinpertanian' => 'Mesinpertanian',
            'alatberat' => 'Alatberat',
            'kabellistrik' => 'Kabellistrik',
            'prlngkapanlistrik' => 'Prlngkapanlistrik',
            'komputer' => 'Komputer',
            'televisi' => 'Televisi',
            'elektroniklainnya' => 'Elektroniklainnya',
            'teleponhp' => 'Teleponhp',
            'mobil' => 'Mobil',
            'kapaldanperbaikan' => 'Kapaldanperbaikan',
            'sparepart1' => 'Sparepart1',
            'sepedamotor' => 'Sepedamotor',
            'sparepart2' => 'Sparepart2',
            'lainnyaanguktan' => 'Lainnyaanguktan',
            'furniturekayu' => 'Furniturekayu',
            'furniturerotan' => 'Furniturerotan',
            'furniturelogam' => 'Furniturelogam',
            'barangindustrilainnya' => 'Barangindustrilainnya',
            'fenomena' => 'Fenomena',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'id_tw' => 'Triwulan',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
