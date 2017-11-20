<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Results".
 *
 * @property integer $id
 * @property integer $PlanId
 * @property integer $StudentId
 * @property integer $NumberOfTries
 * @property integer $Mark
 *
 * @property Plan $plan
 * @property Students $student
 */
class Results extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Results';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PlanId', 'StudentId', 'NumberOfTries', 'Mark'], 'required'],
            [['PlanId', 'StudentId', 'NumberOfTries', 'Mark'], 'integer'],
            [['PlanId'], 'exist', 'skipOnError' => true, 'targetClass' => Plan::className(), 'targetAttribute' => ['PlanId' => 'id']],
            [['StudentId'], 'exist', 'skipOnError' => true, 'targetClass' => Students::className(), 'targetAttribute' => ['StudentId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'PlanId' => 'Plan ID',
            'StudentId' => 'Student ID',
            'NumberOfTries' => 'Number Of Tries',
            'Mark' => 'Mark',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlan()
    {
        return $this->hasOne(Plan::className(), ['id' => 'PlanId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Students::className(), ['id' => 'StudentId']);
    }
}
