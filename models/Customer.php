<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property string $fname
 * @property string $lname
 * @property string $email
 * @property string $mobile
 * @property string $is_whatsapp
 * @property string $email_verified
 * @property string $mobile_verified
 * @property string $gender
 * @property string $date_of_birth
 * @property string $house_number
 * @property string $building
 * @property string $location1
 * @property string $location2
 * @property string $location3
 * @property string $location4
 * @property string $location5
 * @property string $pincode
 * @property string $landmark
 * @property int $city_id
 * @property int $state_id
 * @property int $country_id
 * @property string $latitude
 * @property string $longitude
 * @property string $address
 * @property int $status
 * @property int $is_deleted
 * @property string $deleted_at
 * @property string $created_at
 * @property int $created_by
 * @property string $updated_at
 * @property int $updated_by
 *
 * @property Booking[] $bookings
 * @property MasterCity $city
 * @property MasterState $state
 * @property MasterCountry $country
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fname', 'mobile'], 'required'],
            [['date_of_birth', 'deleted_at', 'created_at', 'updated_at'], 'safe'],
            [['city_id', 'state_id', 'country_id', 'status', 'is_deleted', 'created_by', 'updated_by'], 'integer'],
            [['fname', 'lname', 'email', 'mobile', 'is_whatsapp', 'email_verified', 'mobile_verified', 'gender', 'house_number', 'building', 'location1', 'location2', 'location3', 'location4', 'location5', 'pincode', 'landmark', 'latitude', 'longitude', 'address'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => MasterCity::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['state_id'], 'exist', 'skipOnError' => true, 'targetClass' => MasterState::className(), 'targetAttribute' => ['state_id' => 'id']],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => MasterCountry::className(), 'targetAttribute' => ['country_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'fname' => Yii::t('app', 'Fname'),
            'lname' => Yii::t('app', 'Lname'),
            'email' => Yii::t('app', 'Email'),
            'mobile' => Yii::t('app', 'Mobile'),
            'is_whatsapp' => Yii::t('app', 'Is Whatsapp'),
            'email_verified' => Yii::t('app', 'Email Verified'),
            'mobile_verified' => Yii::t('app', 'Mobile Verified'),
            'gender' => Yii::t('app', 'Gender'),
            'date_of_birth' => Yii::t('app', 'Date Of Birth'),
            'house_number' => Yii::t('app', 'House Number'),
            'building' => Yii::t('app', 'Building'),
            'location1' => Yii::t('app', 'Location1'),
            'location2' => Yii::t('app', 'Location2'),
            'location3' => Yii::t('app', 'Location3'),
            'location4' => Yii::t('app', 'Location4'),
            'location5' => Yii::t('app', 'Location5'),
            'pincode' => Yii::t('app', 'Pincode'),
            'landmark' => Yii::t('app', 'Landmark'),
            'city_id' => Yii::t('app', 'City ID'),
            'state_id' => Yii::t('app', 'State ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'latitude' => Yii::t('app', 'Latitude'),
            'longitude' => Yii::t('app', 'Longitude'),
            'address' => Yii::t('app', 'Address'),
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
    public function getBookings()
    {
        return $this->hasMany(Booking::className(), ['customer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(MasterCity::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(MasterState::className(), ['id' => 'state_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(MasterCountry::className(), ['id' => 'country_id']);
    }

    /**
     * {@inheritdoc}
     * @return CustomerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CustomerQuery(get_called_class());
    }
}
