<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "master_country".
 *
 * @property int $id
 * @property string $code
 * @property string $country
 * @property int $status
 * @property int $is_deleted
 * @property string $deleted_at
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 *
 * @property CompanyInfo[] $companyInfos
 * @property Customer[] $customers
 * @property MasterState[] $masterStates
 * @property Partner[] $partners
 */
class MasterCountry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'master_country';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country'], 'required'],
            [['status', 'is_deleted', 'created_by', 'updated_by'], 'integer'],
            [['deleted_at', 'created_at', 'updated_at'], 'safe'],
            [['code', 'country'], 'string', 'max' => 255],
            [['country'], 'unique'],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'code' => Yii::t('app', 'Code'),
            'country' => Yii::t('app', 'Country'),
            'status' => Yii::t('app', 'Status'),
            'is_deleted' => Yii::t('app', 'Is Deleted'),
            'deleted_at' => Yii::t('app', 'Deleted At'),
            'created_at' => Yii::t('app', 'Created At'),
            'created_by' => Yii::t('app', 'Created By'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'updated_by' => Yii::t('app', 'Updated By'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyInfos()
    {
        return $this->hasMany(CompanyInfo::className(), ['country_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['country_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMasterStates()
    {
        return $this->hasMany(MasterState::className(), ['country_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPartners()
    {
        return $this->hasMany(Partner::className(), ['country_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return MasterCountryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MasterCountryQuery(get_called_class());
    }
}
