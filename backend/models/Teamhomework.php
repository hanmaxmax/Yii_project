<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%teamhomework}}".
 *
 * @property int $num_id 序号
 */
class Teamhomework extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%teamhomework}}';
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
            'num_id' => '序号',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TeamhomeworkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeamhomeworkQuery(get_called_class());
    }
}
