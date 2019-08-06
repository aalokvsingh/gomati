<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[MasterCountry]].
 *
 * @see MasterCountry
 */
class MasterCountryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return MasterCountry[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return MasterCountry|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
