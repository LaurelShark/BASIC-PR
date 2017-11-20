<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Groups".
 *
 * @property integer $GroupNumber
 * @property integer $StudentId
 *
 * @property Disciple[] $disciples
 * @property Students $student
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['GroupNumber', 'StudentId'], 'required'],
            [['GroupNumber', 'StudentId'], 'integer'],
            [['StudentId'], 'exist', 'skipOnError' => true, 'targetClass' => Students::className(), 'targetAttribute' => ['StudentId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'GroupNumber' => 'Group Number',
            'StudentId' => 'Student ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciples()
    {
        return $this->hasMany(Disciple::className(), ['GroupId' => 'GroupNumber']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Students::className(), ['id' => 'StudentId']);
    }
}
