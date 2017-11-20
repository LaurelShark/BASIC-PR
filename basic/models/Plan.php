<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Plan".
 *
 * @property integer $id
 * @property integer $DiscipleId
 * @property integer $LectionId
 * @property integer $TaskId
 * @property string $Deadline
 *
 * @property Disciple $disciple
 * @property Lections $lection
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
            [['DiscipleId', 'LectionId', 'TaskId', 'Deadline'], 'required'],
            [['DiscipleId', 'LectionId', 'TaskId'], 'integer'],
            [['Deadline'], 'safe'],
            [['DiscipleId'], 'exist', 'skipOnError' => true, 'targetClass' => Disciple::className(), 'targetAttribute' => ['DiscipleId' => 'id']],
            [['LectionId'], 'exist', 'skipOnError' => true, 'targetClass' => Lections::className(), 'targetAttribute' => ['LectionId' => 'id']],
            [['TaskId'], 'exist', 'skipOnError' => true, 'targetClass' => Tasks::className(), 'targetAttribute' => ['TaskId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'DiscipleId' => 'Disciple ID',
            'LectionId' => 'Lection ID',
            'TaskId' => 'Task ID',
            'Deadline' => 'Deadline',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisciple()
    {
        return $this->hasOne(Disciple::className(), ['id' => 'DiscipleId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLection()
    {
        return $this->hasOne(Lections::className(), ['id' => 'LectionId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Tasks::className(), ['id' => 'TaskId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResults()
    {
        return $this->hasMany(Results::className(), ['PlanId' => 'id']);
    }
}
