<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Question".
 *
 * @property integer $id
 * @property string $text
 * @property string $answers
 * @property integer $correct_answer_index
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
            [['correct_answer_index', 'task_id'], 'required'],
            [['correct_answer_index', 'task_id'], 'integer'],
            [['text'], 'string', 'max' => 50],
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
            'answers' => 'Answers',
            'correct_answer_index' => 'Correct Answer Index',
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
