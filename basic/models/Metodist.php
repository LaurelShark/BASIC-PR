<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Metodist".
 *
 * @property integer $m_id
 * @property string $m_surname
 * @property string $m_name
 * @property string $m_fathname
 * @property string $m_email
 * @property string $m_password
 * @property integer $d_id
 *
 * @property Department $d
 */
class Metodist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Metodist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['m_surname', 'm_name', 'm_fathname', 'm_email', 'm_password', 'd_id'], 'required'],
            [['d_id'], 'integer'],
            [['m_surname', 'm_name', 'm_fathname'], 'string', 'max' => 30],
            [['m_email', 'm_password'], 'string', 'max' => 255],
            [['d_id'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['d_id' => 'd_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'm_id' => 'M ID',
            'm_surname' => 'M Surname',
            'm_name' => 'M Name',
            'm_fathname' => 'M Fathname',
            'm_email' => 'M Email',
            'm_password' => 'M Password',
            'd_id' => 'D ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getD()
    {
        return $this->hasOne(Department::className(), ['d_id' => 'd_id']);
    }
}
