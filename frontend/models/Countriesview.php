<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "countriesview".
 *
 * @property string $country 国家
 * @property string $name 人名
 * @property string $view 观点
 * @property string $picture 图片
 * @property int $num_id 序号
 */
class Countriesview extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'countriesview';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'name', 'view', 'picture'], 'required'],
            [['view'], 'string'],
            [['country', 'name', 'picture'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'country' => '国家',
            'name' => '人名',
            'view' => '观点',
            'picture' => '图片',
            'num_id' => '序号',
        ];
    }

    /**
     * {@inheritdoc}
     * @return CountriesviewQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CountriesviewQuery(get_called_class());
    }
}
