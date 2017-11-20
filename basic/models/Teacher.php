<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Teacher".
 *
 * @property integer $id
 * @property string $FirstName
 * @property string $FathName
 * @property string $Surname
 * @property string $E-mail
 * @property string $BirthDate
 * @property string $UserName
 * @property string $Password
 * @property string $Disciples
 *
 * @property Disciple[] $disciples
 */
class Teacher extends \yii\db\ActiveRecord
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
            [['FirstName', 'FathName', 'Surname', 'E-mail', 'BirthDate', 'UserName', 'Password', 'Disciples'], 'required'],
            [['BirthDate'], 'safe'],
            [['FirstName', 'FathName', 'Surname', 'E-mail', 'UserName', 'Password', 'Disciples'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'FirstName' => 'First Name',
            'FathName' => 'Fath Name',
            'Surname' => 'Surname',
            'E-mail' => 'E Mail',
            'BirthDate' => 'Birth Date',
            'UserName' => 'User Name',
            'Password' => 'Password',
            'Disciples' => 'Disciples',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciples()
    {
        return $this->hasMany(Disciple::className(), ['TeacherId' => 'id']);
    }
}
