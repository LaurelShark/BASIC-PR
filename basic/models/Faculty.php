<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Faculty".
 *
 * @property integer $f_id
 * @property string $f_name
 * @property integer $u_id
 *
 * @property Department[] $departments
 * @property University $u
 * @property Speciality[] $specialities
 */
class Faculty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Faculty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_name', 'u_id'], 'required'],
            [['u_id'], 'integer'],
            [['f_name'], 'string', 'max' => 30],
            [['u_id'], 'exist', 'skipOnError' => true, 'targetClass' => University::className(), 'targetAttribute' => ['u_id' => 'u_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'f_id' => 'F ID',
            'f_name' => 'F Name',
            'u_id' => 'U ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['f_id' => 'f_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getU()
    {
        return $this->hasOne(University::className(), ['u_id' => 'u_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpecialities()
    {
        return $this->hasMany(Speciality::className(), ['f_id' => 'f_id']);
    }
}
