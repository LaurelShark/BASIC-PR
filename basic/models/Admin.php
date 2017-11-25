<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Admin".
 *
 * @property integer $a_id
 * @property string $a_surname
 * @property string $a_name
 * @property string $a_fathname
 * @property string $a_datebirth
 * @property string $a_position
 * @property string $a_email
 * @property string $a_password
 */
class Admin extends User
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
            [['a_surname', 'a_name', 'a_fathname', 'a_datebirth', 'a_position', 'a_email', 'a_password'], 'required'],
            [['a_datebirth'], 'safe'],
            [['a_surname', 'a_name', 'a_fathname', 'a_position', 'a_email', 'a_password'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a_id' => 'A ID',
            'a_surname' => 'A Surname',
            'a_name' => 'A Name',
            'a_fathname' => 'A Fathname',
            'a_datebirth' => 'A Datebirth',
            'a_position' => 'A Position',
            'a_email' => 'A Email',
            'a_password' => 'A Password',
        ];
    }
}
