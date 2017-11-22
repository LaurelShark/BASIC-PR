<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Speciality".
 *
 * @property integer $speciality_id
 * @property string $speciality_name
 * @property integer $f_id
 *
 * @property Faculty $f
 * @property Student[] $students
 */
class Speciality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Speciality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['speciality_name', 'f_id'], 'required'],
            [['f_id'], 'integer'],
            [['speciality_name'], 'string', 'max' => 100],
            [['f_id'], 'exist', 'skipOnError' => true, 'targetClass' => Faculty::className(), 'targetAttribute' => ['f_id' => 'f_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'speciality_id' => 'Speciality ID',
            'speciality_name' => 'Speciality Name',
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
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['speciality_id' => 'speciality_id']);
    }
}
