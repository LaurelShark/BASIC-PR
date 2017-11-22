<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Groups".
 *
 * @property integer $g_id
 * @property integer $g_name
 * @property integer $disciple_id
 *
 * @property GroupStudent[] $groupStudents
 * @property Student[] $s
 * @property Disciple $disciple
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Groups';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['g_name', 'disciple_id'], 'required'],
            [['g_name', 'disciple_id'], 'integer'],
            [['disciple_id'], 'exist', 'skipOnError' => true, 'targetClass' => Disciple::className(), 'targetAttribute' => ['disciple_id' => 'disciple_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'g_id' => 'G ID',
            'g_name' => 'G Name',
            'disciple_id' => 'Disciple ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroupStudents()
    {
        return $this->hasMany(GroupStudent::className(), ['g_id' => 'g_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getS()
    {
        return $this->hasMany(Student::className(), ['s_id' => 's_id'])->viaTable('Group_Student', ['g_id' => 'g_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciple()
    {
        return $this->hasOne(Disciple::className(), ['disciple_id' => 'disciple_id']);
    }
}
