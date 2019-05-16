<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kategori_layanan".
 *
 * @property int $idkategori
 * @property string $nama
 * @property string $icon
 */
class KategoriLayanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori_layanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'icon'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idkategori' => 'Idkategori',
            'nama' => 'Nama',
            'icon' => 'Icon',
        ];
    }
}
