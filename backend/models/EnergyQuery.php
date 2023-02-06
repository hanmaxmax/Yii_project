<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Energy]].
 *
 * @see Energy
 */
class EnergyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Energy[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Energy|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
