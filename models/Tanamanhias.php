<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tanamanhias".
 *
 * @property integer $id
 * @property double $anggrek
 * @property double $anthurium_bunga
 * @property double $anyelir
 * @property double $gerbera_hebras
 * @property double $gladiol
 * @property double $heliconia_pisang_pisangan
 * @property double $krisan
 * @property double $mawar
 * @property double $sedap_malam
 * @property double $dracaena
 * @property double $melati
 * @property double $palem
 * @property double $aglaonema
 * @property double $adenium_kamboja_jepang
 * @property double $euphorbia
 * @property double $phylodendron
 * @property double $pakis
 * @property double $monstera
 * @property double $ixora_soka
 * @property double $cordyline
 * @property double $diffenbachia
 * @property double $sansevieria_pedang_pedangan
 * @property double $anthurium_daun
 * @property double $caladium
 * @property string $fenomena
 * @property integer $id_wil
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Tanamanhias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tanamanhias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['anggrek', 'anthurium_bunga', 'anyelir', 'gerbera_hebras', 'gladiol', 'heliconia_pisang_pisangan', 'krisan', 'mawar', 'sedap_malam', 'dracaena', 'melati', 'palem', 'aglaonema', 'adenium_kamboja_jepang', 'euphorbia', 'phylodendron', 'pakis', 'monstera', 'ixora_soka', 'cordyline', 'diffenbachia', 'sansevieria_pedang_pedangan', 'anthurium_daun', 'caladium'], 'number'],
            [['fenomena'], 'string'],
            [['id_wil', 'id_satuan', 'id_tahun'], 'required'],
            [['id_wil', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'anggrek' => 'Anggrek',
            'anthurium_bunga' => 'Anthurium Bunga',
            'anyelir' => 'Anyelir',
            'gerbera_hebras' => 'Gerbera Hebras',
            'gladiol' => 'Gladiol',
            'heliconia_pisang_pisangan' => 'Heliconia Pisang Pisangan',
            'krisan' => 'Krisan',
            'mawar' => 'Mawar',
            'sedap_malam' => 'Sedap Malam',
            'dracaena' => 'Dracaena',
            'melati' => 'Melati',
            'palem' => 'Palem',
            'aglaonema' => 'Aglaonema',
            'adenium_kamboja_jepang' => 'Adenium Kamboja Jepang',
            'euphorbia' => 'Euphorbia',
            'phylodendron' => 'Phylodendron',
            'pakis' => 'Pakis',
            'monstera' => 'Monstera',
            'ixora_soka' => 'Ixora Soka',
            'cordyline' => 'Cordyline',
            'diffenbachia' => 'Diffenbachia',
            'sansevieria_pedang_pedangan' => 'Sansevieria Pedang Pedangan',
            'anthurium_daun' => 'Anthurium Daun',
            'caladium' => 'Caladium',
            'fenomena' => 'Fenomena',
            'id_wil' => 'Id Wil',
            'id_satuan' => 'Id Satuan',
            'id_tahun' => 'Id Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
