<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Department".
 *
 * @property integer $d_id
 * @property string $d_name
 * @property integer $f_id
 *
 * @property Faculty $f
 * @property Metodist[] $metodists
 * @property Teacher[] $teachers
 */
class Department extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Department';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['d_name', 'f_id'], 'required'],
            [['f_id'], 'integer'],
            [['d_name'], 'string', 'max' => 100],
            [['f_id'], 'exist', 'skipOnError' => true, 'targetClass' => Faculty::className(), 'targetAttribute' => ['f_id' => 'f_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'd_id' => 'D ID',
            'd_name' => 'D Name',
            'f_id' => 'F ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getF()
    {
        return $this->hasOne(Faculty::className(), ['f_id' => 'f_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMetodists()
    {
        return $this->hasMany(Metodist::className(), ['d_id' => 'd_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeachers()
    {
        return $this->hasMany(Teacher::className(), ['d_id' => 'd_id']);
    }
}
