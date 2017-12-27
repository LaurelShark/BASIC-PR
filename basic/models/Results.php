<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Results".
 *
 * @property integer $r_id
 * @property integer $p_id
 * @property integer $s_id
 * @property integer $NumberOfTries
 * @property integer $Mark
 * @property string $Bitmask
 *
 * @property Plan $p
 * @property Student $s
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
            [['p_id', 's_id', 'NumberOfTries', 'Mark'], 'required'],
            [['p_id', 's_id', 'NumberOfTries', 'Mark'], 'integer'],
            [['p_id'], 'exist', 'skipOnError' => true, 'targetClass' => Plan::className(), 'targetAttribute' => ['p_id' => 'p_id']],
            [['s_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['s_id' => 's_id']],
            ['Bitmask', 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'r_id' => 'R ID',
            'p_id' => 'P ID',
            's_id' => 'S ID',
            'NumberOfTries' => 'Number Of Tries',
            'Mark' => 'Mark',
            'Bitmask' => 'Bitmasks'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getP()
    {
        return $this->hasOne(Plan::className(), ['p_id' => 'p_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getS()
    {
        return $this->hasOne(Student::className(), ['s_id' => 's_id']);
    }
}
