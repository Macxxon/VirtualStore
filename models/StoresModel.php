<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "stores".
 *
 * @property int $id
 * @property string|null $name_store
 * @property string|null $address
 * @property string|null $phone_number
 * @property string|null $whatsapp
 * @property string|null $image
 */
class StoresModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'stores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_store', 'address', 'phone_number', 'whatsapp'], 'string', 'max' => 45],
            [['image'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name_store' => 'Tienda',
            'address' => 'Direccion',
            'phone_number' => 'Telefono',
            'whatsapp' => 'Whatsapp',
            'image' => 'Image',
        ];
    }
}
