<?php

namespace frontend\models;
use yii\data\Pagination;

use Yii;

/**
 * This is the model class for table "{{%news}}".
 *
 * @property string $name
 * @property string $url
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'url'], 'required'],
            [['name', 'url'], 'string', 'max' => 512],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'url' => 'Url',
        ];
    }

    /**
     * {@inheritdoc}
     * @return NewsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new NewsQuery(get_called_class());
    }
    // public static function getAll($pageSize = 5)
    // {
        
    //     $query = News::find()->latest();

    
    //     $count = $query->count();


    //     $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>$pageSize]);

  
    //     $news = $query->offset($pagination->offset)
    //         ->limit($pagination->limit)
    //         ->all();
        
    //     $data['news'] = $news;
    //     $data['pagination'] = $pagination;
        
    //     return $data;
    // }
}
