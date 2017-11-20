<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Disciple".
 *
 * @property integer $id
 * @property string $Name
 * @property integer $GroupId
 * @property integer $TeacherId
 *
 * @property Groups $group
 * @property Teacher $teacher
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
            [['Name', 'GroupId', 'TeacherId'], 'required'],
            [['GroupId', 'TeacherId'], 'integer'],
            [['Name'], 'string', 'max' => 30],
            [['GroupId'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['GroupId' => 'GroupNumber']],
            [['TeacherId'], 'exist', 'skipOnError' => true, 'targetClass' => Teacher::className(), 'targetAttribute' => ['TeacherId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Name' => 'Name',
            'GroupId' => 'Group ID',
            'TeacherId' => 'Teacher ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Groups::className(), ['GroupNumber' => 'GroupId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Teacher::className(), ['id' => 'TeacherId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlans()
    {
        return $this->hasMany(Plan::className(), ['DiscipleId' => 'id']);
    }
}
