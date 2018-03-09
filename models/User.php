<?php
    
    namespace app\models;
    use dektrium\user\models\User as BaseUser;

    class User extends BaseUser
    {
        public function getPosts()
        {
            return $this->hasMany(Posts::className(), ['user_id' => 'id']);
        }
    }

?>
