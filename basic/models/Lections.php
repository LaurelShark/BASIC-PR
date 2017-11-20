<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Lections".
 *
 * @property integer $id
 * @property string $Lection
 *
 * @property Plan[] $plans
 */
class Lections extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Lections';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Lection'], 'required'],
            [['Lection'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Lection' => 'Lection',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlans()
    {
        return $this->hasMany(Plan::className(), ['LectionId' => 'id']);
    }
}
