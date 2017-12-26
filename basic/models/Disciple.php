<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Disciple".
 *
 * @property integer $disciple_id
 * @property string $d_name
 * @property integer $t_id
 *
 * @property Teacher $t
 * @property Groups[] $groups
 * @property Plan[] $plans
 */
class Disciple extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Disciple';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['d_name', 't_id'], 'required'],
            [['t_id'], 'integer'],
            [['d_name'], 'string', 'max' => 30],
            [['t_id'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['t_id' => 't_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'disciple_id' => 'Disciple ID',
            'd_name' => 'D Name',
            't_id' => 'T ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getT()
    {
        return $this->hasOne(Teacher::className(), ['t_id' => 't_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasMany(Groups::className(), ['disciple_id' => 'disciple_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlans()
    {
        return $this->hasMany(Plan::className(), ['disciple_id' => 'disciple_id']);
    }
}
