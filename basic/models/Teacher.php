<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Teacher".
 *
 * @property integer $t_id
 * @property string $t_surname
 * @property string $t_name
 * @property string $t_fathname
 * @property string $t_datebirth
 * @property string $t_email
 * @property string $t_password
 * @property integer $d_id
 *
 * @property Disciple[] $disciples
 * @property Department $d
 */
class Teacher extends User
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Teacher';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['t_surname', 't_name', 't_fathname', 't_datebirth', 't_email', 't_password', 'd_id'], 'required'],
            [['t_datebirth'], 'safe'],
            [['d_id'], 'integer'],
            [['t_surname', 't_name', 't_fathname'], 'string', 'max' => 30],
            [['t_email', 't_password'], 'string', 'max' => 255],
            [['d_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['d_id' => 'd_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            't_id' => 'T ID',
            't_surname' => 'T Surname',
            't_name' => 'T Name',
            't_fathname' => 'T Fathname',
            't_datebirth' => 'T Datebirth',
            't_email' => 'T Email',
            't_password' => 'T Password',
            'd_id' => 'D ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciples()
    {
        return $this->hasMany(Disciple::className(), ['t_id' => 't_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getD()
    {
        return $this->hasOne(Department::className(), ['d_id' => 'd_id']);
    }
}
