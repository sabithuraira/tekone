<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ihp;

/**
 * Ihpsearch represents the model behind the search form about `app\models\Ihp`.
 */
class Ihpsearch extends Ihp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_satuan', 'id_tahun', 'id_tw', 'created_at', 'updated_at'], 'integer'],
            [['bahanmakanan', 'padipalawija', 'padi', 'palawija', 'jagungpocelan', 'ketelapohon', 'ketelarambat', 'kacangtanah', 'kacangkedelai', 'kacanghijau', 'bawangdaun', 'bawangmerah', 'bayam', 'buncismuda', 'cabemerah', 'caberawit', 'kacangpanjang', 'kangkung', 'ketimun', 'kolkubis', 'melinjo', 'sawihijau', 'terongpnjng', 'tomat', 'wortel', 'kentang', 'petai', 'kacangmerah', 'alpukat', 'durian', 'jambubiji', 'jeruk', 'mangga', 'nanas', 'pepaya', 'pisangambon', 'rambutan', 'salak', 'sawo', 'semangka', 'duku', 'nangka', 'karetgetahtebal', 'kelapasawit', 'kopirobusta', 'kelapablmdikupas', 'tebu', 'kakao', 'jambumete', 'cengkeh', 'tembakau', 'lada', 'ternak', 'sapi', 'kerbau', 'kambing', 'babi', 'sususapisegar', 'unggashasilnya', 'ayam', 'itik', 'telur', 'perikananbudidaya', 'bandeng', 'gurame', 'lele', 'mas', 'mujair', 'nila', 'patin', 'udangbudidaya', 'rumputlaut', 'perikanantngkap', 'bawal', 'cakalang', 'kakap', 'kembung', 'kerapu', 'layang', 'selar', 'tembang', 'tenggiri', 'teri', 'tongkol', 'udangtangkap', 'kepiting', 'cumicumi', 'kayu', 'kayujati', 'kayurimbalainnya', 'hasilhutan', 'rotan', 'bambu', 'batubara', 'minyakbumi', 'gasbumidanpanasbumi', 'bijihtembaga', 'bijihemas', 'batu', 'pasir', 'kerikil', 'kapur', 'dagingsapi', 'dagingayam', 'dagingbabi', 'dagingkambingdomba', 'dagingolahanawetan', 'ikanbekuawetan', 'udangbekuawetan', 'minyakkelapa', 'minyakgoreng', 'minyakkelapasawit', 'sususegar', 'susukentalmanis', 'susububuk', 'susucairkemasan', 'eskrim', 'makanandarisusu', 'beras', 'tepungterigu', 'tepungtapioka', 'tepungberas', 'tepunglainnya', 'pakanikan', 'pakanlain', 'roti', 'biskuit', 'mie', 'gulapasir', 'gulamerah', 'sirop', 'kembanggula', 'coklatbubuk', 'kopibubuk', 'teh', 'kecap', 'tahutempe', 'garammeja', 'kerupukkeripik', 'airminumkemasan', 'minumanringan', 'tehkemasan', 'rokokkretek', 'rokokfilter', 'benangpintal', 'benangrayon', 'benangpolyester', 'kaintenun', 'kaincetak', 'lainnya', 'pakaianbatik', 'pakaiandarikaos', 'pakaianpria', 'pakaianwanita', 'pakaiananakanak', 'perlengkapanpakaian', 'sepatudewasa', 'sandaldewasa', 'sepatusandalanakanak', 'sepatuolahraga', 'kayujatigergajian', 'kayulainnya', 'bahanbangunankayu', 'kertaskoran', 'kertastulis', 'tissue', 'kertaspembungkus', 'karton', 'kartonkemasan', 'pupukurea', 'pupuklainnya', 'pestisidainsektisida', 'bijiplastik', 'bahankimia', 'cattembok', 'catkayubesi', 'vernislak', 'deterjen', 'sabunmandi', 'pemutihpewangi', 'kosmetik', 'bahankimialain', 'premium', 'avtur', 'solar', 'aspal', 'minyakpelumas', 'rss', 'sir', 'banmobil', 'bansepedamotor', 'vulkanisirban', 'pvc', 'plastik', 'barangkaretdanplastiklain', 'kacalembaran', 'keramik', 'barangpecahbelah', 'batubata', 'genteng', 'semen', 'conblock', 'barangbukanlogamlainnya', 'bajalembaran', 'besibeton', 'besisiku', 'besiplat', 'pipabesi', 'alumunium', 'seng', 'murpakubaut', 'kawat', 'lainnyadarilogam', 'mesinpembangkit', 'mesinindustri', 'mesinpertanian', 'alatberat', 'kabellistrik', 'prlngkapanlistrik', 'komputer', 'televisi', 'elektroniklainnya', 'teleponhp', 'mobil', 'kapaldanperbaikan', 'sparepart1', 'sepedamotor', 'sparepart2', 'lainnyaanguktan', 'furniturekayu', 'furniturerotan', 'furniturelogam', 'barangindustrilainnya'], 'number'],
            [['fenomena'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Ihp::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'bahanmakanan' => $this->bahanmakanan,
            'padipalawija' => $this->padipalawija,
            'padi' => $this->padi,
            'palawija' => $this->palawija,
            'jagungpocelan' => $this->jagungpocelan,
            'ketelapohon' => $this->ketelapohon,
            'ketelarambat' => $this->ketelarambat,
            'kacangtanah' => $this->kacangtanah,
            'kacangkedelai' => $this->kacangkedelai,
            'kacanghijau' => $this->kacanghijau,
            'bawangdaun' => $this->bawangdaun,
            'bawangmerah' => $this->bawangmerah,
            'bayam' => $this->bayam,
            'buncismuda' => $this->buncismuda,
            'cabemerah' => $this->cabemerah,
            'caberawit' => $this->caberawit,
            'kacangpanjang' => $this->kacangpanjang,
            'kangkung' => $this->kangkung,
            'ketimun' => $this->ketimun,
            'kolkubis' => $this->kolkubis,
            'melinjo' => $this->melinjo,
            'sawihijau' => $this->sawihijau,
            'terongpnjng' => $this->terongpnjng,
            'tomat' => $this->tomat,
            'wortel' => $this->wortel,
            'kentang' => $this->kentang,
            'petai' => $this->petai,
            'kacangmerah' => $this->kacangmerah,
            'alpukat' => $this->alpukat,
            'durian' => $this->durian,
            'jambubiji' => $this->jambubiji,
            'jeruk' => $this->jeruk,
            'mangga' => $this->mangga,
            'nanas' => $this->nanas,
            'pepaya' => $this->pepaya,
            'pisangambon' => $this->pisangambon,
            'rambutan' => $this->rambutan,
            'salak' => $this->salak,
            'sawo' => $this->sawo,
            'semangka' => $this->semangka,
            'duku' => $this->duku,
            'nangka' => $this->nangka,
            'karetgetahtebal' => $this->karetgetahtebal,
            'kelapasawit' => $this->kelapasawit,
            'kopirobusta' => $this->kopirobusta,
            'kelapablmdikupas' => $this->kelapablmdikupas,
            'tebu' => $this->tebu,
            'kakao' => $this->kakao,
            'jambumete' => $this->jambumete,
            'cengkeh' => $this->cengkeh,
            'tembakau' => $this->tembakau,
            'lada' => $this->lada,
            'ternak' => $this->ternak,
            'sapi' => $this->sapi,
            'kerbau' => $this->kerbau,
            'kambing' => $this->kambing,
            'babi' => $this->babi,
            'sususapisegar' => $this->sususapisegar,
            'unggashasilnya' => $this->unggashasilnya,
            'ayam' => $this->ayam,
            'itik' => $this->itik,
            'telur' => $this->telur,
            'perikananbudidaya' => $this->perikananbudidaya,
            'bandeng' => $this->bandeng,
            'gurame' => $this->gurame,
            'lele' => $this->lele,
            'mas' => $this->mas,
            'mujair' => $this->mujair,
            'nila' => $this->nila,
            'patin' => $this->patin,
            'udangbudidaya' => $this->udangbudidaya,
            'rumputlaut' => $this->rumputlaut,
            'perikanantngkap' => $this->perikanantngkap,
            'bawal' => $this->bawal,
            'cakalang' => $this->cakalang,
            'kakap' => $this->kakap,
            'kembung' => $this->kembung,
            'kerapu' => $this->kerapu,
            'layang' => $this->layang,
            'selar' => $this->selar,
            'tembang' => $this->tembang,
            'tenggiri' => $this->tenggiri,
            'teri' => $this->teri,
            'tongkol' => $this->tongkol,
            'udangtangkap' => $this->udangtangkap,
            'kepiting' => $this->kepiting,
            'cumicumi' => $this->cumicumi,
            'kayu' => $this->kayu,
            'kayujati' => $this->kayujati,
            'kayurimbalainnya' => $this->kayurimbalainnya,
            'hasilhutan' => $this->hasilhutan,
            'rotan' => $this->rotan,
            'bambu' => $this->bambu,
            'batubara' => $this->batubara,
            'minyakbumi' => $this->minyakbumi,
            'gasbumidanpanasbumi' => $this->gasbumidanpanasbumi,
            'bijihtembaga' => $this->bijihtembaga,
            'bijihemas' => $this->bijihemas,
            'batu' => $this->batu,
            'pasir' => $this->pasir,
            'kerikil' => $this->kerikil,
            'kapur' => $this->kapur,
            'dagingsapi' => $this->dagingsapi,
            'dagingayam' => $this->dagingayam,
            'dagingbabi' => $this->dagingbabi,
            'dagingkambingdomba' => $this->dagingkambingdomba,
            'dagingolahanawetan' => $this->dagingolahanawetan,
            'ikanbekuawetan' => $this->ikanbekuawetan,
            'udangbekuawetan' => $this->udangbekuawetan,
            'minyakkelapa' => $this->minyakkelapa,
            'minyakgoreng' => $this->minyakgoreng,
            'minyakkelapasawit' => $this->minyakkelapasawit,
            'sususegar' => $this->sususegar,
            'susukentalmanis' => $this->susukentalmanis,
            'susububuk' => $this->susububuk,
            'susucairkemasan' => $this->susucairkemasan,
            'eskrim' => $this->eskrim,
            'makanandarisusu' => $this->makanandarisusu,
            'beras' => $this->beras,
            'tepungterigu' => $this->tepungterigu,
            'tepungtapioka' => $this->tepungtapioka,
            'tepungberas' => $this->tepungberas,
            'tepunglainnya' => $this->tepunglainnya,
            'pakanikan' => $this->pakanikan,
            'pakanlain' => $this->pakanlain,
            'roti' => $this->roti,
            'biskuit' => $this->biskuit,
            'mie' => $this->mie,
            'gulapasir' => $this->gulapasir,
            'gulamerah' => $this->gulamerah,
            'sirop' => $this->sirop,
            'kembanggula' => $this->kembanggula,
            'coklatbubuk' => $this->coklatbubuk,
            'kopibubuk' => $this->kopibubuk,
            'teh' => $this->teh,
            'kecap' => $this->kecap,
            'tahutempe' => $this->tahutempe,
            'garammeja' => $this->garammeja,
            'kerupukkeripik' => $this->kerupukkeripik,
            'airminumkemasan' => $this->airminumkemasan,
            'minumanringan' => $this->minumanringan,
            'tehkemasan' => $this->tehkemasan,
            'rokokkretek' => $this->rokokkretek,
            'rokokfilter' => $this->rokokfilter,
            'benangpintal' => $this->benangpintal,
            'benangrayon' => $this->benangrayon,
            'benangpolyester' => $this->benangpolyester,
            'kaintenun' => $this->kaintenun,
            'kaincetak' => $this->kaincetak,
            'lainnya' => $this->lainnya,
            'pakaianbatik' => $this->pakaianbatik,
            'pakaiandarikaos' => $this->pakaiandarikaos,
            'pakaianpria' => $this->pakaianpria,
            'pakaianwanita' => $this->pakaianwanita,
            'pakaiananakanak' => $this->pakaiananakanak,
            'perlengkapanpakaian' => $this->perlengkapanpakaian,
            'sepatudewasa' => $this->sepatudewasa,
            'sandaldewasa' => $this->sandaldewasa,
            'sepatusandalanakanak' => $this->sepatusandalanakanak,
            'sepatuolahraga' => $this->sepatuolahraga,
            'kayujatigergajian' => $this->kayujatigergajian,
            'kayulainnya' => $this->kayulainnya,
            'bahanbangunankayu' => $this->bahanbangunankayu,
            'kertaskoran' => $this->kertaskoran,
            'kertastulis' => $this->kertastulis,
            'tissue' => $this->tissue,
            'kertaspembungkus' => $this->kertaspembungkus,
            'karton' => $this->karton,
            'kartonkemasan' => $this->kartonkemasan,
            'pupukurea' => $this->pupukurea,
            'pupuklainnya' => $this->pupuklainnya,
            'pestisidainsektisida' => $this->pestisidainsektisida,
            'bijiplastik' => $this->bijiplastik,
            'bahankimia' => $this->bahankimia,
            'cattembok' => $this->cattembok,
            'catkayubesi' => $this->catkayubesi,
            'vernislak' => $this->vernislak,
            'deterjen' => $this->deterjen,
            'sabunmandi' => $this->sabunmandi,
            'pemutihpewangi' => $this->pemutihpewangi,
            'kosmetik' => $this->kosmetik,
            'bahankimialain' => $this->bahankimialain,
            'premium' => $this->premium,
            'avtur' => $this->avtur,
            'solar' => $this->solar,
            'aspal' => $this->aspal,
            'minyakpelumas' => $this->minyakpelumas,
            'rss' => $this->rss,
            'sir' => $this->sir,
            'banmobil' => $this->banmobil,
            'bansepedamotor' => $this->bansepedamotor,
            'vulkanisirban' => $this->vulkanisirban,
            'pvc' => $this->pvc,
            'plastik' => $this->plastik,
            'barangkaretdanplastiklain' => $this->barangkaretdanplastiklain,
            'kacalembaran' => $this->kacalembaran,
            'keramik' => $this->keramik,
            'barangpecahbelah' => $this->barangpecahbelah,
            'batubata' => $this->batubata,
            'genteng' => $this->genteng,
            'semen' => $this->semen,
            'conblock' => $this->conblock,
            'barangbukanlogamlainnya' => $this->barangbukanlogamlainnya,
            'bajalembaran' => $this->bajalembaran,
            'besibeton' => $this->besibeton,
            'besisiku' => $this->besisiku,
            'besiplat' => $this->besiplat,
            'pipabesi' => $this->pipabesi,
            'alumunium' => $this->alumunium,
            'seng' => $this->seng,
            'murpakubaut' => $this->murpakubaut,
            'kawat' => $this->kawat,
            'lainnyadarilogam' => $this->lainnyadarilogam,
            'mesinpembangkit' => $this->mesinpembangkit,
            'mesinindustri' => $this->mesinindustri,
            'mesinpertanian' => $this->mesinpertanian,
            'alatberat' => $this->alatberat,
            'kabellistrik' => $this->kabellistrik,
            'prlngkapanlistrik' => $this->prlngkapanlistrik,
            'komputer' => $this->komputer,
            'televisi' => $this->televisi,
            'elektroniklainnya' => $this->elektroniklainnya,
            'teleponhp' => $this->teleponhp,
            'mobil' => $this->mobil,
            'kapaldanperbaikan' => $this->kapaldanperbaikan,
            'sparepart1' => $this->sparepart1,
            'sepedamotor' => $this->sepedamotor,
            'sparepart2' => $this->sparepart2,
            'lainnyaanguktan' => $this->lainnyaanguktan,
            'furniturekayu' => $this->furniturekayu,
            'furniturerotan' => $this->furniturerotan,
            'furniturelogam' => $this->furniturelogam,
            'barangindustrilainnya' => $this->barangindustrilainnya,
            'id_satuan' => $this->id_satuan,
            'id_tahun' => $this->id_tahun,
            'id_tw' => $this->id_tw,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'fenomena', $this->fenomena]);

        return $dataProvider;
    }
}
