<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[OurTeamMems]].
 *
 * @see OurTeamMems
 */
class OurTeamMemsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return OurTeamMems[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return OurTeamMems|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
