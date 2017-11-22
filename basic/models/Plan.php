<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Plan".
 *
 * @property integer $p_id
 * @property integer $disciple_id
 * @property integer $lect_id
 * @property integer $task_id
 * @property string $Deadline
 *
 * @property Disciple $disciple
 * @property Lections $lect
 * @property Tasks $task
 * @property Results[] $results
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disciple_id', 'lect_id', 'task_id', 'Deadline'], 'required'],
            [['disciple_id', 'lect_id', 'task_id'], 'integer'],
            [['Deadline'], 'safe'],
            [['disciple_id'], 'exist', 'skipOnError' => true, 'targetClass' => Disciple::className(), 'targetAttribute' => ['disciple_id' => 'disciple_id']],
            [['lect_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lections::className(), 'targetAttribute' => ['lect_id' => 'lect_id']],
            [['task_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tasks::className(), 'targetAttribute' => ['task_id' => 'task_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'p_id' => 'P ID',
            'disciple_id' => 'Disciple ID',
            'lect_id' => 'Lect ID',
            'task_id' => 'Task ID',
            'Deadline' => 'Deadline',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciple()
    {
        return $this->hasOne(Disciple::className(), ['disciple_id' => 'disciple_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLect()
    {
        return $this->hasOne(Lections::className(), ['lect_id' => 'lect_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Tasks::className(), ['task_id' => 'task_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResults()
    {
        return $this->hasMany(Results::className(), ['p_id' => 'p_id']);
    }
}
