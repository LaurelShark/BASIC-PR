<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Lections".
 *
 * @property integer $lect_id
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
            'lect_id' => 'Lect ID',
            'Lection' => 'Lection',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlans()
    {
        return $this->hasMany(Plan::className(), ['lect_id' => 'lect_id']);
    }
}
