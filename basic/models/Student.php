<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Student".
 *
 * @property integer $s_id
 * @property string $s_surname
 * @property string $s_name
 * @property string $s_fathname
 * @property string $s_datebirth
 * @property integer $s_course
 * @property string $s_email
 * @property string $s_password
 * @property integer $speciality_id
 *
 * @property GroupStudent[] $groupStudents
 * @property Groups[] $gs
 * @property Results[] $results
 * @property Speciality $speciality
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_surname', 's_name', 's_fathname', 's_datebirth', 's_course', 's_email', 's_password', 'speciality_id'], 'required'],
            [['s_datebirth'], 'safe'],
            [['s_course', 'speciality_id'], 'integer'],
            [['s_surname', 's_name', 's_fathname'], 'string', 'max' => 30],
            [['s_email', 's_password'], 'string', 'max' => 255],
            [['speciality_id'], 'exist', 'skipOnError' => true, 'targetClass' => Speciality::className(), 'targetAttribute' => ['speciality_id' => 'speciality_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            's_id' => 'S ID',
            's_surname' => 'S Surname',
            's_name' => 'S Name',
            's_fathname' => 'S Fathname',
            's_datebirth' => 'S Datebirth',
            's_course' => 'S Course',
            's_email' => 'S Email',
            's_password' => 'S Password',
            'speciality_id' => 'Speciality ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroupStudents()
    {
        return $this->hasMany(GroupStudent::className(), ['s_id' => 's_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGs()
    {
        return $this->hasMany(Groups::className(), ['g_id' => 'g_id'])->viaTable('Group_Student', ['s_id' => 's_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResults()
    {
        return $this->hasMany(Results::className(), ['s_id' => 's_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpeciality()
    {
        return $this->hasOne(Speciality::className(), ['speciality_id' => 'speciality_id']);
    }
}
