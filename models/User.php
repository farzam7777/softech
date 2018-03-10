<?php
    
    namespace app\models;
    use dektrium\user\models\User as BaseUser;

    class User extends BaseUser
    {
        /**
         * @return \yii\db\ActiveQuery
         */
        public function getSubscriptions()
        {
            return $this->hasMany(UserSubscriptions::className(), ['user_id' => 'id']);
        }
    }

?>
