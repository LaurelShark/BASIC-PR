<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "University".
 *
 * @property integer $u_id
 * @property string $u_name
 * @property string $u_street
 * @property string $u_buildnum
 * @property string $u_city
 * @property string $u_postcode
 * @property string $u_telephone
 *
 * @property Faculty[] $faculties
 */
class University extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'University';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_name', 'u_street', 'u_buildnum', 'u_city', 'u_postcode', 'u_telephone'], 'required'],
            [['u_name', 'u_street', 'u_buildnum', 'u_city', 'u_postcode', 'u_telephone'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'u_name' => 'U Name',
            'u_street' => 'U Street',
            'u_buildnum' => 'U Buildnum',
            'u_city' => 'U City',
            'u_postcode' => 'U Postcode',
            'u_telephone' => 'U Telephone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFaculties()
    {
        return $this->hasMany(Faculty::className(), ['u_id' => 'u_id']);
    }
}
