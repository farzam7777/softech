<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "upcoming_matches".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $date
 * @property string $time
 */
class UpcomingMatches extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'upcoming_matches';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'date', 'time'], 'required'],
            [['user_id'], 'integer'],
            [['name', 'time'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'date' => 'Date',
            'time' => 'Time',
        ];
    }
}
