<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Question".
 *
 * @property integer $id
 * @property string $text
 * @property string $task_intro
 * @property string $answers
 * @property integer $task_id
 *
 * @property Tasks $task
 */
class Question extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_id'], 'required'],
            [['task_id'], 'integer'],
            [['text'], 'string', 'max' => 50],
            [['task_intro'], 'string', 'max' => 500],
            [['answers'], 'string', 'max' => 200],
            [['task_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tasks::className(), 'targetAttribute' => ['task_id' => 'task_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'task_intro' => 'Task Intro',
            'answers' => 'Answers',
            'task_id' => 'Task ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Tasks::className(), ['task_id' => 'task_id']);
    }
}
