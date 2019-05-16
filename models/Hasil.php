<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hasil".
 *
 * @property int $idhasil
 * @property int $jenislayanan
 * @property int $kategorilayanan
 * @property string $tanggal_input
 * @property string $jk
 */
class Hasil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hasil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jenislayanan', 'kategorilayanan', 'jk'], 'required'],
            [['jenislayanan', 'kategorilayanan'], 'integer'],
            [['tanggal_input'], 'safe'],
            [['jk'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idhasil' => 'Idhasil',
            'jenislayanan' => 'Jenislayanan',
            'kategorilayanan' => 'Kategorilayanan',
            'tanggal_input' => 'Tanggal Input',
            'jk' => 'Jk',
        ];
    }
}
