<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%personhomework}}".
 *
 * @property int $num_id
 */
class Personhomework extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%personhomework}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num_id' => 'Num ID',
        ];
    }

    /**
     * {@inheritdoc}
     * @return PersonhomeworkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PersonhomeworkQuery(get_called_class());
    }
}
