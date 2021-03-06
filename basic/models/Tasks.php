<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tasks".
 *
 * @property integer $task_id
 * @property string $Name
 * @property string $Task
 * @property string $Answer
 *
 * @property Plan[] $plans
 */
class Tasks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tasks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'task_id' => 'Task ID',
            'Name' => 'Name'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlans()
    {
        return $this->hasMany(Plan::className(), ['task_id' => 'task_id']);
    }
}
