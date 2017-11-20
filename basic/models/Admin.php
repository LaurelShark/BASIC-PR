<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Admin".
 *
 * @property integer $id
 * @property string $FirstName
 * @property string $FathName
 * @property string $Surname
 * @property string $DateBirth
 * @property string $Position
 * @property string $UserName
 * @property string $Password
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FirstName', 'FathName', 'Surname', 'DateBirth', 'Position', 'UserName', 'Password'], 'required'],
            [['DateBirth'], 'safe'],
            [['FirstName', 'FathName', 'Surname', 'Position', 'UserName', 'Password'], 'string', 'max' => 100],
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
            'DateBirth' => 'Date Birth',
            'Position' => 'Position',
            'UserName' => 'User Name',
            'Password' => 'Password',
        ];
    }
}
