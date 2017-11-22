<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Group_Student".
 *
 * @property integer $g_id
 * @property integer $s_id
 *
 * @property Student $s
 * @property Groups $g
 */
class Studentsgroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Group_Student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['g_id', 's_id'], 'required'],
            [['g_id', 's_id'], 'integer'],
            [['s_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['s_id' => 's_id']],
            [['g_id'], 'exist', 'skipOnError' => true, 'targetClass' => Groups::className(), 'targetAttribute' => ['g_id' => 'g_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'g_id' => 'G ID',
            's_id' => 'S ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getS()
    {
        return $this->hasOne(Student::className(), ['s_id' => 's_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getG()
    {
        return $this->hasOne(Groups::className(), ['g_id' => 'g_id']);
    }
}
