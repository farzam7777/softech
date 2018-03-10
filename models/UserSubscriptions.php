<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_subscriptions".
 *
 * @property int $id
 * @property int $user_id
 * @property string $link
 * @property string $match_time
 * @property string $alert_time
 */
class UserSubscriptions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_subscriptions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'link'], 'required'],
            [['user_id'], 'integer'],
            [['link', 'match_time', 'alert_time'], 'string'],
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
            'link' => 'Link',
            'match_time' => 'Match Time',
            'alert_time' => 'Alert Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne($this->module->modelMap['User'], ['user_id' => 'id']);
    }
}
