<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Students".
 *
 * @property integer $id
 * @property string $FirstName
 * @property string $FathName
 * @property string $Surname
 * @property string $E-mail
 * @property string $BirthDate
 * @property integer $Course
 * @property string $UserName
 * @property string $Password
 *
 * @property Groups[] $groups
 * @property Results[] $results
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FirstName', 'FathName', 'Surname', 'E-mail', 'BirthDate', 'Course', 'UserName', 'Password'], 'required'],
            [['BirthDate'], 'safe'],
            [['Course'], 'integer'],
            [['FirstName', 'FathName', 'Surname', 'E-mail', 'UserName', 'Password'], 'string', 'max' => 30],
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
            'Course' => 'Course',
            'UserName' => 'User Name',
            'Password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasMany(Groups::className(), ['StudentId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResults()
    {
        return $this->hasMany(Results::className(), ['StudentId' => 'id']);
    }
}
