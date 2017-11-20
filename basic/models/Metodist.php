<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Metodists".
 *
 * @property integer $id
 * @property string $FirstName
 * @property string $FathName
 * @property string $Surname
 * @property string $E-mail
 * @property string $UserName
 * @property string $Password
 */
class Metodist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Metodists';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FirstName', 'FathName', 'Surname', 'E-mail', 'UserName', 'Password'], 'required'],
            [['FirstName', 'FathName', 'Surname', 'E-mail', 'UserName', 'Password'], 'string', 'max' => 100],
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
            'UserName' => 'User Name',
            'Password' => 'Password',
        ];
    }
}
