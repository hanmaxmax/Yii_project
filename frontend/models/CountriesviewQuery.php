<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Countriesview]].
 *
 * @see Countriesview
 */
class CountriesviewQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Countriesview[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Countriesview|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
