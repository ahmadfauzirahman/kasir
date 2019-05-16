<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenislayanan".
 *
 * @property int $id_layanan
 * @property string $nama_layanan
 * @property string $foto
 */
class Jenislayanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenislayanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_layanan'], 'required'],
            [['nama_layanan', 'foto'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_layanan' => 'Id Layanan',
            'nama_layanan' => 'Nama Layanan',
            'foto' => 'Foto',
        ];
    }
}
