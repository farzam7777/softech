<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_subscriptions".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $link
 * @property string $label
 * @property string $match_time
 * @property string $alert_time
 * @property string $image_url
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
            [['image_url', 'name', 'label', 'link', 'match_time', 'alert_time'], 'string'],
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
            'link' => 'Link',
            'label' => 'Label',
            'match_time' => 'Match Time',
            'alert_time' => 'Alert Time',
            'image_url' => 'Image Url',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'id']);
    }
}
