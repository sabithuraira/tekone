<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ihpb".
 *
 * @property integer $id
 * @property double $tomat
 * @property double $kubiskol
 * @property double $daunbawang
 * @property double $sawi
 * @property double $kacangpanjang
 * @property double $wortel
 * @property double $buncis
 * @property double $mentimun
 * @property double $terung
 * @property double $kangkung
 * @property double $bayam
 * @property double $semangka
 * @property double $melon
 * @property double $kacangtanah
 * @property double $kedelai
 * @property double $ketelapohon
 * @property double $ubijalar
 * @property double $kentang
 * @property double $kacanghijau
 * @property double $tebu
 * @property double $tanamanbunga
 * @property double $tembakau
 * @property double $kapuk
 * @property double $pertniantnamanthunan
 * @property double $cabemerah
 * @property double $caberawit
 * @property double $jeruk
 * @property double $mangga
 * @property double $salak
 * @property double $pisang
 * @property double $apellokal
 * @property double $rambutan
 * @property double $pepaya
 * @property double $alpukat
 * @property double $jambubiji
 * @property double $sawo
 * @property double $nanas
 * @property double $jambumete
 * @property double $kelapasawit
 * @property double $kelapa
 * @property double $kopi
 * @property double $lada
 * @property double $kakao
 * @property double $cengkeh
 * @property double $teh
 * @property double $karet
 * @property double $tnamanbiofarmaka
 * @property double $peternakan
 * @property double $ayamras
 * @property double $sapi
 * @property double $ayamburas
 * @property double $kambingdandomba
 * @property double $kerbau
 * @property double $babi
 * @property double $itik
 * @property double $sususegar
 * @property double $telurayamburas
 * @property double $teluritik
 * @property double $telurayamras
 * @property double $pengusahaanhutan
 * @property double $meranti
 * @property double $kayujatigelondongan
 * @property double $kruing
 * @property double $rotan
 * @property double $perikanantangkap
 * @property double $bawal
 * @property double $tenggiri
 * @property double $tongkol
 * @property double $kakapputih
 * @property double $kakapmerahbambangan
 * @property double $kembung
 * @property double $cakalang
 * @property double $kerapu
 * @property double $layang
 * @property double $selar
 * @property double $teri
 * @property double $tuna
 * @property double $kepitingairlaut
 * @property double $udangairtawar
 * @property double $udanglaut
 * @property double $cumicumi
 * @property double $manyung
 * @property double $perikananbudidaya
 * @property double $patin
 * @property double $lele
 * @property double $nila
 * @property double $ikanmas
 * @property double $bandeng
 * @property double $gurami
 * @property double $gabus
 * @property double $rumputlaut
 * @property double $pertmbanganbatubara
 * @property double $batubara
 * @property double $penggalianbatupasirdantanahliat
 * @property double $batuhiasdanbatubangunan
 * @property double $batubahanindustri
 * @property double $tanahdantanahliat
 * @property double $pasir
 * @property double $kerikil
 * @property double $pertpenggalian
 * @property double $barangtambangmineralbknlogam
 * @property double $penggalianlainnya
 * @property double $industripengolahandanpengawetandaging
 * @property double $dagingsapi
 * @property double $dagingkambing
 * @property double $dagingbabi
 * @property double $dagingayam
 * @property double $dagingdlamkaleng
 * @property double $dagingolahan
 * @property double $industripengolahandanpengawetanikan
 * @property double $ikanteriasinkering
 * @property double $ikanasinkeringlainnya
 * @property double $ikanbeku
 * @property double $industripengolahandanpengawetanbuah
 * @property double $buahdansayurkalengan
 * @property double $buahdansayurlumatan
 * @property double $tempe
 * @property double $tahu
 * @property double $inyakkelapasawit
 * @property double $margarine
 * @property double $minyakgorengkelapa
 * @property double $minyakgorengkelapasawit
 * @property double $kopra
 * @property double $industripengolahansusu
 * @property double $susucair
 * @property double $susububuk
 * @property double $susukental
 * @property double $eskrim
 * @property double $industripenggilinganpadi
 * @property double $beras
 * @property double $tepungterigu
 * @property double $tepungberas
 * @property double $tepungtapioka
 * @property double $kopibijikupasan
 * @property double $coklatbijikupasan
 * @property double $industrimknnlainnya
 * @property double $roti
 * @property double $biskuit
 * @property double $wafer
 * @property double $gulapasir
 * @property double $gulamerah
 * @property double $sirop
 * @property double $bubukcoklat
 * @property double $coklatolahan
 * @property double $kembanggula
 * @property double $kecap
 * @property double $miekering
 * @property double $kerupuk
 * @property double $mieinstan
 * @property double $vermicellibihun
 * @property double $bumbumsakdanpnyedap
 * @property double $soun
 * @property double $tehhijau
 * @property double $tehhitam
 * @property double $santankelapa
 * @property double $natadecoco
 * @property double $tehekstrak
 * @property double $kopibijimatang
 * @property double $mkanandarikacang
 * @property double $kopibubuk
 * @property double $kopiinstan
 * @property double $industrimakananhewan
 * @property double $mknantrnakbesardanunggas
 * @property double $mkananikan
 * @property double $industriminuman
 * @property double $minumanberalkohol
 * @property double $minumanringanco2
 * @property double $airdngnaromabuah
 * @property double $airdngnaromateh
 * @property double $airmineral
 * @property double $industripengolahantembakau
 * @property double $tembakauolahan
 * @property double $rokokkretek
 * @property double $rokokputih
 * @property double $industripemintalan
 * @property double $benang
 * @property double $kaintenun
 * @property double $kaincetak
 * @property double $kainbatik
 * @property double $industritekstillainnya
 * @property double $permadani
 * @property double $industripakaianjadi
 * @property double $rajutan
 * @property double $pakaianpriabatik
 * @property double $pakaianprianonbatik
 * @property double $pakaianwanitabatik
 * @property double $pakaianwanitanonbatik
 * @property double $pakaiandalampria
 * @property double $pakaiandalamwanita
 * @property double $pakaianolahraga
 * @property double $perlengkapanpakaian
 * @property double $industrikulit
 * @property double $kulit
 * @property double $brangbrangdarikulit
 * @property double $industrialaskaki
 * @property double $sepatu
 * @property double $sandal
 * @property double $sepatuolahraga
 * @property double $industripenggergajian
 * @property double $kayujatigergajian
 * @property double $kayurimbagergajian
 * @property double $industribrangdarikayu
 * @property double $kayulapis
 * @property double $mouldingdowel
 * @property double $bahanbangunankayu
 * @property double $brngterbuatdarikayugabusbamburotan
 * @property double $anyamanrotan
 * @property double $anyamanbambu
 * @property double $anyamanlainnya
 * @property double $industrikertas
 * @property double $kertaskoran
 * @property double $kertastulis
 * @property double $kertaskonstruksi
 * @property double $tissue
 * @property double $brngbrngdarikertas
 * @property double $industripercetakan
 * @property double $barangcetakan
 * @property double $industriprodukpengilngnmnyakbumi
 * @property double $avgas
 * @property double $avtur
 * @property double $premium
 * @property double $minyaktanah
 * @property double $solar
 * @property double $minyakdiesel
 * @property double $minyakbakar
 * @property double $minyakpelumas
 * @property double $aspal
 * @property double $lpg
 * @property double $industribahankimia
 * @property double $kimiadasarorganik
 * @property double $kimiadasaranorganik
 * @property double $pupukurea
 * @property double $pupukalam
 * @property double $pupuknpk
 * @property double $damarbuatan
 * @property double $lateksbuatan
 * @property double $industribahankimialainnya
 * @property double $pestisidauntkpertniandanindustri
 * @property double $insektisidauntkrmhtngga
 * @property double $catkayubesi
 * @property double $cattembok
 * @property double $pernisdempuldanthinner
 * @property double $tintacetak
 * @property double $sabun
 * @property double $pembersihlantaiklosetdanlainnya
 * @property double $pastagigi
 * @property double $pemutih
 * @property double $brngbrngkosmetik
 * @property double $barangkimialainnya
 * @property double $industrifarmasi
 * @property double $produkfarmasi
 * @property double $jamu
 * @property double $industrikaret
 * @property double $banluarmobildantruk
 * @property double $banluarsepedamotor
 * @property double $banluarsepeda
 * @property double $bandalammobildantruk
 * @property double $bandalamsepedamotor
 * @property double $bandalamsepeda
 * @property double $karetasap
 * @property double $karetremilling
 * @property double $karetremah
 * @property double $brngkperlanrmhtnggadarikaret
 * @property double $brngkperluanindustridarikaret
 * @property double $industribrngdariplstik
 * @property double $pipapvc
 * @property double $pipaplstikselainpvc
 * @property double $selang
 * @property double $plstiklembaran
 * @property double $kmsandariplastik
 * @property double $prlengkpnrmhtnggadariplastik
 * @property double $industrikacadanbrngdarikaa
 * @property double $prlengkpnrmhtnggadariporselindatanahliat
 * @property double $klosetwastafeldansejenisnya
 * @property double $keramiklantai
 * @property double $batubata
 * @property double $genteng
 * @property double $semenportland
 * @property double $semenlainnya
 * @property double $batusplit
 * @property double $readymix
 * @property double $konblok
 * @property double $batako
 * @property double $pipabeton
 * @property double $tiangbeton
 * @property double $gentengsemen
 * @property double $bhnbngunandarimarmergranitdansejenis
 * @property double $industrilogamdasarbejidanbaja
 * @property double $billetbaja
 * @property double $besibeton
 * @property double $besiprofil
 * @property double $bajalembaran
 * @property double $besipipa
 * @property double $besiplat
 * @property double $kawatbeton
 * @property double $kawatlainnya
 * @property double $industrilogamdasarmulia
 * @property double $alumunium
 * @property double $timah
 * @property double $seng
 * @property double $industribaranglogamsiappasang
 * @property double $tangki
 * @property double $bahanbangunanalumunium
 * @property double $bahanbangunanbaja
 * @property double $bahanbangunansiappasanglogam
 * @property double $industribaranglogamlainnya
 * @property double $pakumurbaut
 * @property double $kalengdrum
 * @property double $alatdapurdanpertaniandarilogam
 * @property double $perabotrumahtanggadankantordarilogam
 * @property double $industrikomputerdanperlengkapan
 * @property double $komputerdanperlengkapannya
 * @property double $industriperalatanaudiodanvideo
 * @property double $pemutardvdvcd
 * @property double $industrialatukuralatuji
 * @property double $alatukur
 * @property double $arlojidanjam
 * @property double $industriperalatanfotografi
 * @property double $kameradanperlengkapannya
 * @property double $teropongdanperlengkapannya
 * @property double $industrimediamagnetik
 * @property double $mediamagnetikdanmediaoptik
 * @property double $industrimotorlistrik
 * @property double $mesinlistrik
 * @property double $industribatubaterai
 * @property double $batubaterai
 * @property double $aki
 * @property double $industrikabeldanperlengkapannya
 * @property double $perlengkapanlistrik
 * @property double $industriperalatanrumahtangga
 * @property double $mesincuci
 * @property double $lemaries
 * @property double $televisi
 * @property double $industrimesinkeperluanumum
 * @property double $perkakastangan
 * @property double $mesinpembungkuspembotolan
 * @property double $mesinpendinginindustri
 * @property double $industrimesinkeperluankhusus
 * @property double $mesinpertaniandankehutanan
 * @property double $mesinpengolahlogam
 * @property double $alatalatberat
 * @property double $industrikendaraanbermotorrodaempat
 * @property double $busdantruk
 * @property double $mobil
 * @property double $industrisukucadangdanaksesori
 * @property double $sukucdngkendaraanbermotorrodaempat
 * @property double $industrialatangkutanlainnya
 * @property double $sepeda
 * @property double $sukucadangsepeda
 * @property double $sepedamotor
 * @property double $sukucadangsepedamotor
 * @property double $industrifurnitur
 * @property double $furniturdarikayu
 * @property double $furniturdarirotanbambu
 * @property double $furniturlainnya
 * @property double $industribarangperhiasan
 * @property double $perhiasanemas
 * @property double $perhiasanperak
 * @property double $industrialatmusik
 * @property double $alatmusik
 * @property double $industrialatolahraga
 * @property double $boladanshuttlecock
 * @property double $raketdannet
 * @property double $industriperalatankedokteran
 * @property double $alatalatkedokteran
 * @property double $kacamatadanlensa
 * @property string $fenomena
 * @property integer $id_tw
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Ihpb extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ihpb';
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
            [['tomat', 'kubiskol', 'daunbawang', 'sawi', 'kacangpanjang', 'wortel', 'buncis', 'mentimun', 'terung', 'kangkung', 'bayam', 'semangka', 'melon', 'kacangtanah', 'kedelai', 'ketelapohon', 'ubijalar', 'kentang', 'kacanghijau', 'tebu', 'tanamanbunga', 'tembakau', 'kapuk', 'pertniantnamanthunan', 'cabemerah', 'caberawit', 'jeruk', 'mangga', 'salak', 'pisang', 'apellokal', 'rambutan', 'pepaya', 'alpukat', 'jambubiji', 'sawo', 'nanas', 'jambumete', 'kelapasawit', 'kelapa', 'kopi', 'lada', 'kakao', 'cengkeh', 'teh', 'karet', 'tnamanbiofarmaka', 'peternakan', 'ayamras', 'sapi', 'ayamburas', 'kambingdandomba', 'kerbau', 'babi', 'itik', 'sususegar', 'telurayamburas', 'teluritik', 'telurayamras', 'pengusahaanhutan', 'meranti', 'kayujatigelondongan', 'kruing', 'rotan', 'perikanantangkap', 'bawal', 'tenggiri', 'tongkol', 'kakapputih', 'kakapmerahbambangan', 'kembung', 'cakalang', 'kerapu', 'layang', 'selar', 'teri', 'tuna', 'kepitingairlaut', 'udangairtawar', 'udanglaut', 'cumicumi', 'manyung', 'perikananbudidaya', 'patin', 'lele', 'nila', 'ikanmas', 'bandeng', 'gurami', 'gabus', 'rumputlaut', 'pertmbanganbatubara', 'batubara', 'penggalianbatupasirdantanahliat', 'batuhiasdanbatubangunan', 'batubahanindustri', 'tanahdantanahliat', 'pasir', 'kerikil', 'pertpenggalian', 'barangtambangmineralbknlogam', 'penggalianlainnya', 'industripengolahandanpengawetandaging', 'dagingsapi', 'dagingkambing', 'dagingbabi', 'dagingayam', 'dagingdlamkaleng', 'dagingolahan', 'industripengolahandanpengawetanikan', 'ikanteriasinkering', 'ikanasinkeringlainnya', 'ikanbeku', 'industripengolahandanpengawetanbuah', 'buahdansayurkalengan', 'buahdansayurlumatan', 'tempe', 'tahu', 'inyakkelapasawit', 'margarine', 'minyakgorengkelapa', 'minyakgorengkelapasawit', 'kopra', 'industripengolahansusu', 'susucair', 'susububuk', 'susukental', 'eskrim', 'industripenggilinganpadi', 'beras', 'tepungterigu', 'tepungberas', 'tepungtapioka', 'kopibijikupasan', 'coklatbijikupasan', 'industrimknnlainnya', 'roti', 'biskuit', 'wafer', 'gulapasir', 'gulamerah', 'sirop', 'bubukcoklat', 'coklatolahan', 'kembanggula', 'kecap', 'miekering', 'kerupuk', 'mieinstan', 'vermicellibihun', 'bumbumsakdanpnyedap', 'soun', 'tehhijau', 'tehhitam', 'santankelapa', 'natadecoco', 'tehekstrak', 'kopibijimatang', 'mkanandarikacang', 'kopibubuk', 'kopiinstan', 'industrimakananhewan', 'mknantrnakbesardanunggas', 'mkananikan', 'industriminuman', 'minumanberalkohol', 'minumanringanco2', 'airdngnaromabuah', 'airdngnaromateh', 'airmineral', 'industripengolahantembakau', 'tembakauolahan', 'rokokkretek', 'rokokputih', 'industripemintalan', 'benang', 'kaintenun', 'kaincetak', 'kainbatik', 'industritekstillainnya', 'permadani', 'industripakaianjadi', 'rajutan', 'pakaianpriabatik', 'pakaianprianonbatik', 'pakaianwanitabatik', 'pakaianwanitanonbatik', 'pakaiandalampria', 'pakaiandalamwanita', 'pakaianolahraga', 'perlengkapanpakaian', 'industrikulit', 'kulit', 'brangbrangdarikulit', 'industrialaskaki', 'sepatu', 'sandal', 'sepatuolahraga', 'industripenggergajian', 'kayujatigergajian', 'kayurimbagergajian', 'industribrangdarikayu', 'kayulapis', 'mouldingdowel', 'bahanbangunankayu', 'brngterbuatdarikayugabusbamburotan', 'anyamanrotan', 'anyamanbambu', 'anyamanlainnya', 'industrikertas', 'kertaskoran', 'kertastulis', 'kertaskonstruksi', 'tissue', 'brngbrngdarikertas', 'industripercetakan', 'barangcetakan', 'industriprodukpengilngnmnyakbumi', 'avgas', 'avtur', 'premium', 'minyaktanah', 'solar', 'minyakdiesel', 'minyakbakar', 'minyakpelumas', 'aspal', 'lpg', 'industribahankimia', 'kimiadasarorganik', 'kimiadasaranorganik', 'pupukurea', 'pupukalam', 'pupuknpk', 'damarbuatan', 'lateksbuatan', 'industribahankimialainnya', 'pestisidauntkpertniandanindustri', 'insektisidauntkrmhtngga', 'catkayubesi', 'cattembok', 'pernisdempuldanthinner', 'tintacetak', 'sabun', 'pembersihlantaiklosetdanlainnya', 'pastagigi', 'pemutih', 'brngbrngkosmetik', 'barangkimialainnya', 'industrifarmasi', 'produkfarmasi', 'jamu', 'industrikaret', 'banluarmobildantruk', 'banluarsepedamotor', 'banluarsepeda', 'bandalammobildantruk', 'bandalamsepedamotor', 'bandalamsepeda', 'karetasap', 'karetremilling', 'karetremah', 'brngkperlanrmhtnggadarikaret', 'brngkperluanindustridarikaret', 'industribrngdariplstik', 'pipapvc', 'pipaplstikselainpvc', 'selang', 'plstiklembaran', 'kmsandariplastik', 'prlengkpnrmhtnggadariplastik', 'industrikacadanbrngdarikaa', 'prlengkpnrmhtnggadariporselindatanahliat', 'klosetwastafeldansejenisnya', 'keramiklantai', 'batubata', 'genteng', 'semenportland', 'semenlainnya', 'batusplit', 'readymix', 'konblok', 'batako', 'pipabeton', 'tiangbeton', 'gentengsemen', 'bhnbngunandarimarmergranitdansejenis', 'industrilogamdasarbejidanbaja', 'billetbaja', 'besibeton', 'besiprofil', 'bajalembaran', 'besipipa', 'besiplat', 'kawatbeton', 'kawatlainnya', 'industrilogamdasarmulia', 'alumunium', 'timah', 'seng', 'industribaranglogamsiappasang', 'tangki', 'bahanbangunanalumunium', 'bahanbangunanbaja', 'bahanbangunansiappasanglogam', 'industribaranglogamlainnya', 'pakumurbaut', 'kalengdrum', 'alatdapurdanpertaniandarilogam', 'perabotrumahtanggadankantordarilogam', 'industrikomputerdanperlengkapan', 'komputerdanperlengkapannya', 'industriperalatanaudiodanvideo', 'pemutardvdvcd', 'industrialatukuralatuji', 'alatukur', 'arlojidanjam', 'industriperalatanfotografi', 'kameradanperlengkapannya', 'teropongdanperlengkapannya', 'industrimediamagnetik', 'mediamagnetikdanmediaoptik', 'industrimotorlistrik', 'mesinlistrik', 'industribatubaterai', 'batubaterai', 'aki', 'industrikabeldanperlengkapannya', 'perlengkapanlistrik', 'industriperalatanrumahtangga', 'mesincuci', 'lemaries', 'televisi', 'industrimesinkeperluanumum', 'perkakastangan', 'mesinpembungkuspembotolan', 'mesinpendinginindustri', 'industrimesinkeperluankhusus', 'mesinpertaniandankehutanan', 'mesinpengolahlogam', 'alatalatberat', 'industrikendaraanbermotorrodaempat', 'busdantruk', 'mobil', 'industrisukucadangdanaksesori', 'sukucdngkendaraanbermotorrodaempat', 'industrialatangkutanlainnya', 'sepeda', 'sukucadangsepeda', 'sepedamotor', 'sukucadangsepedamotor', 'industrifurnitur', 'furniturdarikayu', 'furniturdarirotanbambu', 'furniturlainnya', 'industribarangperhiasan', 'perhiasanemas', 'perhiasanperak', 'industrialatmusik', 'alatmusik', 'industrialatolahraga', 'boladanshuttlecock', 'raketdannet', 'industriperalatankedokteran', 'alatalatkedokteran', 'kacamatadanlensa'], 'number'],
            [['fenomena'], 'string'],
            [['id_tw', 'id_satuan', 'id_tahun'], 'required'],
            [['id_tw', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tomat' => 'Tomat',
            'kubiskol' => 'Kubiskol',
            'daunbawang' => 'Daunbawang',
            'sawi' => 'Sawi',
            'kacangpanjang' => 'Kacangpanjang',
            'wortel' => 'Wortel',
            'buncis' => 'Buncis',
            'mentimun' => 'Mentimun',
            'terung' => 'Terung',
            'kangkung' => 'Kangkung',
            'bayam' => 'Bayam',
            'semangka' => 'Semangka',
            'melon' => 'Melon',
            'kacangtanah' => 'Kacangtanah',
            'kedelai' => 'Kedelai',
            'ketelapohon' => 'Ketelapohon',
            'ubijalar' => 'Ubijalar',
            'kentang' => 'Kentang',
            'kacanghijau' => 'Kacanghijau',
            'tebu' => 'Tebu',
            'tanamanbunga' => 'Tanamanbunga',
            'tembakau' => 'Tembakau',
            'kapuk' => 'Kapuk',
            'pertniantnamanthunan' => 'Pertniantnamanthunan',
            'cabemerah' => 'Cabemerah',
            'caberawit' => 'Caberawit',
            'jeruk' => 'Jeruk',
            'mangga' => 'Mangga',
            'salak' => 'Salak',
            'pisang' => 'Pisang',
            'apellokal' => 'Apellokal',
            'rambutan' => 'Rambutan',
            'pepaya' => 'Pepaya',
            'alpukat' => 'Alpukat',
            'jambubiji' => 'Jambubiji',
            'sawo' => 'Sawo',
            'nanas' => 'Nanas',
            'jambumete' => 'Jambumete',
            'kelapasawit' => 'Kelapasawit',
            'kelapa' => 'Kelapa',
            'kopi' => 'Kopi',
            'lada' => 'Lada',
            'kakao' => 'Kakao',
            'cengkeh' => 'Cengkeh',
            'teh' => 'Teh',
            'karet' => 'Karet',
            'tnamanbiofarmaka' => 'Tnamanbiofarmaka',
            'peternakan' => 'Peternakan',
            'ayamras' => 'Ayamras',
            'sapi' => 'Sapi',
            'ayamburas' => 'Ayamburas',
            'kambingdandomba' => 'Kambingdandomba',
            'kerbau' => 'Kerbau',
            'babi' => 'Babi',
            'itik' => 'Itik',
            'sususegar' => 'Sususegar',
            'telurayamburas' => 'Telurayamburas',
            'teluritik' => 'Teluritik',
            'telurayamras' => 'Telurayamras',
            'pengusahaanhutan' => 'Pengusahaanhutan',
            'meranti' => 'Meranti',
            'kayujatigelondongan' => 'Kayujatigelondongan',
            'kruing' => 'Kruing',
            'rotan' => 'Rotan',
            'perikanantangkap' => 'Perikanantangkap',
            'bawal' => 'Bawal',
            'tenggiri' => 'Tenggiri',
            'tongkol' => 'Tongkol',
            'kakapputih' => 'Kakapputih',
            'kakapmerahbambangan' => 'Kakapmerahbambangan',
            'kembung' => 'Kembung',
            'cakalang' => 'Cakalang',
            'kerapu' => 'Kerapu',
            'layang' => 'Layang',
            'selar' => 'Selar',
            'teri' => 'Teri',
            'tuna' => 'Tuna',
            'kepitingairlaut' => 'Kepitingairlaut',
            'udangairtawar' => 'Udangairtawar',
            'udanglaut' => 'Udanglaut',
            'cumicumi' => 'Cumicumi',
            'manyung' => 'Manyung',
            'perikananbudidaya' => 'Perikananbudidaya',
            'patin' => 'Patin',
            'lele' => 'Lele',
            'nila' => 'Nila',
            'ikanmas' => 'Ikanmas',
            'bandeng' => 'Bandeng',
            'gurami' => 'Gurami',
            'gabus' => 'Gabus',
            'rumputlaut' => 'Rumputlaut',
            'pertmbanganbatubara' => 'Pertmbanganbatubara',
            'batubara' => 'Batubara',
            'penggalianbatupasirdantanahliat' => 'Penggalianbatupasirdantanahliat',
            'batuhiasdanbatubangunan' => 'Batuhiasdanbatubangunan',
            'batubahanindustri' => 'Batubahanindustri',
            'tanahdantanahliat' => 'Tanahdantanahliat',
            'pasir' => 'Pasir',
            'kerikil' => 'Kerikil',
            'pertpenggalian' => 'Pertpenggalian',
            'barangtambangmineralbknlogam' => 'Barangtambangmineralbknlogam',
            'penggalianlainnya' => 'Penggalianlainnya',
            'industripengolahandanpengawetandaging' => 'Industripengolahandanpengawetandaging',
            'dagingsapi' => 'Dagingsapi',
            'dagingkambing' => 'Dagingkambing',
            'dagingbabi' => 'Dagingbabi',
            'dagingayam' => 'Dagingayam',
            'dagingdlamkaleng' => 'Dagingdlamkaleng',
            'dagingolahan' => 'Dagingolahan',
            'industripengolahandanpengawetanikan' => 'Industripengolahandanpengawetanikan',
            'ikanteriasinkering' => 'Ikanteriasinkering',
            'ikanasinkeringlainnya' => 'Ikanasinkeringlainnya',
            'ikanbeku' => 'Ikanbeku',
            'industripengolahandanpengawetanbuah' => 'Industripengolahandanpengawetanbuah',
            'buahdansayurkalengan' => 'Buahdansayurkalengan',
            'buahdansayurlumatan' => 'Buahdansayurlumatan',
            'tempe' => 'Tempe',
            'tahu' => 'Tahu',
            'inyakkelapasawit' => 'Inyakkelapasawit',
            'margarine' => 'Margarine',
            'minyakgorengkelapa' => 'Minyakgorengkelapa',
            'minyakgorengkelapasawit' => 'Minyakgorengkelapasawit',
            'kopra' => 'Kopra',
            'industripengolahansusu' => 'Industripengolahansusu',
            'susucair' => 'Susucair',
            'susububuk' => 'Susububuk',
            'susukental' => 'Susukental',
            'eskrim' => 'Eskrim',
            'industripenggilinganpadi' => 'Industripenggilinganpadi',
            'beras' => 'Beras',
            'tepungterigu' => 'Tepungterigu',
            'tepungberas' => 'Tepungberas',
            'tepungtapioka' => 'Tepungtapioka',
            'kopibijikupasan' => 'Kopibijikupasan',
            'coklatbijikupasan' => 'Coklatbijikupasan',
            'industrimknnlainnya' => 'Industrimknnlainnya',
            'roti' => 'Roti',
            'biskuit' => 'Biskuit',
            'wafer' => 'Wafer',
            'gulapasir' => 'Gulapasir',
            'gulamerah' => 'Gulamerah',
            'sirop' => 'Sirop',
            'bubukcoklat' => 'Bubukcoklat',
            'coklatolahan' => 'Coklatolahan',
            'kembanggula' => 'Kembanggula',
            'kecap' => 'Kecap',
            'miekering' => 'Miekering',
            'kerupuk' => 'Kerupuk',
            'mieinstan' => 'Mieinstan',
            'vermicellibihun' => 'Vermicellibihun',
            'bumbumsakdanpnyedap' => 'Bumbumsakdanpnyedap',
            'soun' => 'Soun',
            'tehhijau' => 'Tehhijau',
            'tehhitam' => 'Tehhitam',
            'santankelapa' => 'Santankelapa',
            'natadecoco' => 'Natadecoco',
            'tehekstrak' => 'Tehekstrak',
            'kopibijimatang' => 'Kopibijimatang',
            'mkanandarikacang' => 'Mkanandarikacang',
            'kopibubuk' => 'Kopibubuk',
            'kopiinstan' => 'Kopiinstan',
            'industrimakananhewan' => 'Industrimakananhewan',
            'mknantrnakbesardanunggas' => 'Mknantrnakbesardanunggas',
            'mkananikan' => 'Mkananikan',
            'industriminuman' => 'Industriminuman',
            'minumanberalkohol' => 'Minumanberalkohol',
            'minumanringanco2' => 'Minumanringanco2',
            'airdngnaromabuah' => 'Airdngnaromabuah',
            'airdngnaromateh' => 'Airdngnaromateh',
            'airmineral' => 'Airmineral',
            'industripengolahantembakau' => 'Industripengolahantembakau',
            'tembakauolahan' => 'Tembakauolahan',
            'rokokkretek' => 'Rokokkretek',
            'rokokputih' => 'Rokokputih',
            'industripemintalan' => 'Industripemintalan',
            'benang' => 'Benang',
            'kaintenun' => 'Kaintenun',
            'kaincetak' => 'Kaincetak',
            'kainbatik' => 'Kainbatik',
            'industritekstillainnya' => 'Industritekstillainnya',
            'permadani' => 'Permadani',
            'industripakaianjadi' => 'Industripakaianjadi',
            'rajutan' => 'Rajutan',
            'pakaianpriabatik' => 'Pakaianpriabatik',
            'pakaianprianonbatik' => 'Pakaianprianonbatik',
            'pakaianwanitabatik' => 'Pakaianwanitabatik',
            'pakaianwanitanonbatik' => 'Pakaianwanitanonbatik',
            'pakaiandalampria' => 'Pakaiandalampria',
            'pakaiandalamwanita' => 'Pakaiandalamwanita',
            'pakaianolahraga' => 'Pakaianolahraga',
            'perlengkapanpakaian' => 'Perlengkapanpakaian',
            'industrikulit' => 'Industrikulit',
            'kulit' => 'Kulit',
            'brangbrangdarikulit' => 'Brangbrangdarikulit',
            'industrialaskaki' => 'Industrialaskaki',
            'sepatu' => 'Sepatu',
            'sandal' => 'Sandal',
            'sepatuolahraga' => 'Sepatuolahraga',
            'industripenggergajian' => 'Industripenggergajian',
            'kayujatigergajian' => 'Kayujatigergajian',
            'kayurimbagergajian' => 'Kayurimbagergajian',
            'industribrangdarikayu' => 'Industribrangdarikayu',
            'kayulapis' => 'Kayulapis',
            'mouldingdowel' => 'Mouldingdowel',
            'bahanbangunankayu' => 'Bahanbangunankayu',
            'brngterbuatdarikayugabusbamburotan' => 'Brngterbuatdarikayugabusbamburotan',
            'anyamanrotan' => 'Anyamanrotan',
            'anyamanbambu' => 'Anyamanbambu',
            'anyamanlainnya' => 'Anyamanlainnya',
            'industrikertas' => 'Industrikertas',
            'kertaskoran' => 'Kertaskoran',
            'kertastulis' => 'Kertastulis',
            'kertaskonstruksi' => 'Kertaskonstruksi',
            'tissue' => 'Tissue',
            'brngbrngdarikertas' => 'Brngbrngdarikertas',
            'industripercetakan' => 'Industripercetakan',
            'barangcetakan' => 'Barangcetakan',
            'industriprodukpengilngnmnyakbumi' => 'Industriprodukpengilngnmnyakbumi',
            'avgas' => 'Avgas',
            'avtur' => 'Avtur',
            'premium' => 'Premium',
            'minyaktanah' => 'Minyaktanah',
            'solar' => 'Solar',
            'minyakdiesel' => 'Minyakdiesel',
            'minyakbakar' => 'Minyakbakar',
            'minyakpelumas' => 'Minyakpelumas',
            'aspal' => 'Aspal',
            'lpg' => 'Lpg',
            'industribahankimia' => 'Industribahankimia',
            'kimiadasarorganik' => 'Kimiadasarorganik',
            'kimiadasaranorganik' => 'Kimiadasaranorganik',
            'pupukurea' => 'Pupukurea',
            'pupukalam' => 'Pupukalam',
            'pupuknpk' => 'Pupuknpk',
            'damarbuatan' => 'Damarbuatan',
            'lateksbuatan' => 'Lateksbuatan',
            'industribahankimialainnya' => 'Industribahankimialainnya',
            'pestisidauntkpertniandanindustri' => 'Pestisidauntkpertniandanindustri',
            'insektisidauntkrmhtngga' => 'Insektisidauntkrmhtngga',
            'catkayubesi' => 'Catkayubesi',
            'cattembok' => 'Cattembok',
            'pernisdempuldanthinner' => 'Pernisdempuldanthinner',
            'tintacetak' => 'Tintacetak',
            'sabun' => 'Sabun',
            'pembersihlantaiklosetdanlainnya' => 'Pembersihlantaiklosetdanlainnya',
            'pastagigi' => 'Pastagigi',
            'pemutih' => 'Pemutih',
            'brngbrngkosmetik' => 'Brngbrngkosmetik',
            'barangkimialainnya' => 'Barangkimialainnya',
            'industrifarmasi' => 'Industrifarmasi',
            'produkfarmasi' => 'Produkfarmasi',
            'jamu' => 'Jamu',
            'industrikaret' => 'Industrikaret',
            'banluarmobildantruk' => 'Banluarmobildantruk',
            'banluarsepedamotor' => 'Banluarsepedamotor',
            'banluarsepeda' => 'Banluarsepeda',
            'bandalammobildantruk' => 'Bandalammobildantruk',
            'bandalamsepedamotor' => 'Bandalamsepedamotor',
            'bandalamsepeda' => 'Bandalamsepeda',
            'karetasap' => 'Karetasap',
            'karetremilling' => 'Karetremilling',
            'karetremah' => 'Karetremah',
            'brngkperlanrmhtnggadarikaret' => 'Brngkperlanrmhtnggadarikaret',
            'brngkperluanindustridarikaret' => 'Brngkperluanindustridarikaret',
            'industribrngdariplstik' => 'Industribrngdariplstik',
            'pipapvc' => 'Pipapvc',
            'pipaplstikselainpvc' => 'Pipaplstikselainpvc',
            'selang' => 'Selang',
            'plstiklembaran' => 'Plstiklembaran',
            'kmsandariplastik' => 'Kmsandariplastik',
            'prlengkpnrmhtnggadariplastik' => 'Prlengkpnrmhtnggadariplastik',
            'industrikacadanbrngdarikaa' => 'Industrikacadanbrngdarikaa',
            'prlengkpnrmhtnggadariporselindatanahliat' => 'Prlengkpnrmhtnggadariporselindatanahliat',
            'klosetwastafeldansejenisnya' => 'Klosetwastafeldansejenisnya',
            'keramiklantai' => 'Keramiklantai',
            'batubata' => 'Batubata',
            'genteng' => 'Genteng',
            'semenportland' => 'Semenportland',
            'semenlainnya' => 'Semenlainnya',
            'batusplit' => 'Batusplit',
            'readymix' => 'Readymix',
            'konblok' => 'Konblok',
            'batako' => 'Batako',
            'pipabeton' => 'Pipabeton',
            'tiangbeton' => 'Tiangbeton',
            'gentengsemen' => 'Gentengsemen',
            'bhnbngunandarimarmergranitdansejenis' => 'Bhnbngunandarimarmergranitdansejenis',
            'industrilogamdasarbejidanbaja' => 'Industrilogamdasarbejidanbaja',
            'billetbaja' => 'Billetbaja',
            'besibeton' => 'Besibeton',
            'besiprofil' => 'Besiprofil',
            'bajalembaran' => 'Bajalembaran',
            'besipipa' => 'Besipipa',
            'besiplat' => 'Besiplat',
            'kawatbeton' => 'Kawatbeton',
            'kawatlainnya' => 'Kawatlainnya',
            'industrilogamdasarmulia' => 'Industrilogamdasarmulia',
            'alumunium' => 'Alumunium',
            'timah' => 'Timah',
            'seng' => 'Seng',
            'industribaranglogamsiappasang' => 'Industribaranglogamsiappasang',
            'tangki' => 'Tangki',
            'bahanbangunanalumunium' => 'Bahanbangunanalumunium',
            'bahanbangunanbaja' => 'Bahanbangunanbaja',
            'bahanbangunansiappasanglogam' => 'Bahanbangunansiappasanglogam',
            'industribaranglogamlainnya' => 'Industribaranglogamlainnya',
            'pakumurbaut' => 'Pakumurbaut',
            'kalengdrum' => 'Kalengdrum',
            'alatdapurdanpertaniandarilogam' => 'Alatdapurdanpertaniandarilogam',
            'perabotrumahtanggadankantordarilogam' => 'Perabotrumahtanggadankantordarilogam',
            'industrikomputerdanperlengkapan' => 'Industrikomputerdanperlengkapan',
            'komputerdanperlengkapannya' => 'Komputerdanperlengkapannya',
            'industriperalatanaudiodanvideo' => 'Industriperalatanaudiodanvideo',
            'pemutardvdvcd' => 'Pemutardvdvcd',
            'industrialatukuralatuji' => 'Industrialatukuralatuji',
            'alatukur' => 'Alatukur',
            'arlojidanjam' => 'Arlojidanjam',
            'industriperalatanfotografi' => 'Industriperalatanfotografi',
            'kameradanperlengkapannya' => 'Kameradanperlengkapannya',
            'teropongdanperlengkapannya' => 'Teropongdanperlengkapannya',
            'industrimediamagnetik' => 'Industrimediamagnetik',
            'mediamagnetikdanmediaoptik' => 'Mediamagnetikdanmediaoptik',
            'industrimotorlistrik' => 'Industrimotorlistrik',
            'mesinlistrik' => 'Mesinlistrik',
            'industribatubaterai' => 'Industribatubaterai',
            'batubaterai' => 'Batubaterai',
            'aki' => 'Aki',
            'industrikabeldanperlengkapannya' => 'Industrikabeldanperlengkapannya',
            'perlengkapanlistrik' => 'Perlengkapanlistrik',
            'industriperalatanrumahtangga' => 'Industriperalatanrumahtangga',
            'mesincuci' => 'Mesincuci',
            'lemaries' => 'Lemaries',
            'televisi' => 'Televisi',
            'industrimesinkeperluanumum' => 'Industrimesinkeperluanumum',
            'perkakastangan' => 'Perkakastangan',
            'mesinpembungkuspembotolan' => 'Mesinpembungkuspembotolan',
            'mesinpendinginindustri' => 'Mesinpendinginindustri',
            'industrimesinkeperluankhusus' => 'Industrimesinkeperluankhusus',
            'mesinpertaniandankehutanan' => 'Mesinpertaniandankehutanan',
            'mesinpengolahlogam' => 'Mesinpengolahlogam',
            'alatalatberat' => 'Alatalatberat',
            'industrikendaraanbermotorrodaempat' => 'Industrikendaraanbermotorrodaempat',
            'busdantruk' => 'Busdantruk',
            'mobil' => 'Mobil',
            'industrisukucadangdanaksesori' => 'Industrisukucadangdanaksesori',
            'sukucdngkendaraanbermotorrodaempat' => 'Sukucdngkendaraanbermotorrodaempat',
            'industrialatangkutanlainnya' => 'Industrialatangkutanlainnya',
            'sepeda' => 'Sepeda',
            'sukucadangsepeda' => 'Sukucadangsepeda',
            'sepedamotor' => 'Sepedamotor',
            'sukucadangsepedamotor' => 'Sukucadangsepedamotor',
            'industrifurnitur' => 'Industrifurnitur',
            'furniturdarikayu' => 'Furniturdarikayu',
            'furniturdarirotanbambu' => 'Furniturdarirotanbambu',
            'furniturlainnya' => 'Furniturlainnya',
            'industribarangperhiasan' => 'Industribarangperhiasan',
            'perhiasanemas' => 'Perhiasanemas',
            'perhiasanperak' => 'Perhiasanperak',
            'industrialatmusik' => 'Industrialatmusik',
            'alatmusik' => 'Alatmusik',
            'industrialatolahraga' => 'Industrialatolahraga',
            'boladanshuttlecock' => 'Boladanshuttlecock',
            'raketdannet' => 'Raketdannet',
            'industriperalatankedokteran' => 'Industriperalatankedokteran',
            'alatalatkedokteran' => 'Alatalatkedokteran',
            'kacamatadanlensa' => 'Kacamatadanlensa',
            'fenomena' => 'Fenomena',
            'id_tw' => 'Triwulan',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
