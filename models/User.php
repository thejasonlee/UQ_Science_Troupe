<?php
namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord {

}
?>





// <?php

// namespace app\models;

// use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $password_hash
 * @property string $auth_key
 * @property int $confirmed_at
 * @property string $unconfirmed_email
 * @property int $blocked_at
 * @property string $registration_ip
 * @property int $created_at
 * @property int $updated_at
 * @property int $flags
 * @property int $last_login_at
 *
 * @property Profile $profile
 * @property SocialAccount[] $socialAccounts
 * @property Token[] $tokens
 */
// class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
// {

// class User extends ActiveRecord
//  {

    // /**
    //  * {@inheritdoc}
    //  */
    // public static function tableName()
    // {
    //     return 'user';
    // }

    // /**
    //  * {@inheritdoc}
    //  */
    // public function rules()
    // {
    //     return [
    //         [['username', 'email', 'password_hash', 'auth_key', 'created_at', 'updated_at'], 'required'],
    //         [['confirmed_at', 'blocked_at', 'created_at', 'updated_at', 'flags', 'last_login_at'], 'integer'],
    //         [['username', 'email', 'unconfirmed_email'], 'string', 'max' => 255],
    //         [['password_hash'], 'string', 'max' => 60],
    //         [['auth_key'], 'string', 'max' => 32],
    //         [['registration_ip'], 'string', 'max' => 45],
    //         [['username'], 'unique'],
    //         [['email'], 'unique'],
    //     ];
    // }

    // /**
    //  * {@inheritdoc}
    //  */
    // public function attributeLabels()
    // {
    //     return [
    //         'id' => 'ID',
    //         'username' => 'Username',
    //         'email' => 'Email',
    //         'password_hash' => 'Password Hash',
    //         'auth_key' => 'Auth Key',
    //         'confirmed_at' => 'Confirmed At',
    //         'unconfirmed_email' => 'Unconfirmed Email',
    //         'blocked_at' => 'Blocked At',
    //         'registration_ip' => 'Registration Ip',
    //         'created_at' => 'Created At',
    //         'updated_at' => 'Updated At',
    //         'flags' => 'Flags',
    //         'last_login_at' => 'Last Login At',
    //         'latitude' => 'latitude',
    //         'longitude' => 'longitude',
    //     ];
    // }

    // /**
    //  * @return \yii\db\ActiveQuery
    //  */
    // public function getProfile()
    // {
    //     return $this->hasOne(Profile::className(), ['user_id' => 'id']);
    // }

    // /**
    //  * @return \yii\db\ActiveQuery
    //  */
    // public function getSocialAccounts()
    // {
    //     return $this->hasMany(SocialAccount::className(), ['user_id' => 'id']);
    // }

    // /**
    //  * @return \yii\db\ActiveQuery
    //  */
    // public function getTokens()
    // {
    //     return $this->hasMany(Token::className(), ['user_id' => 'id']);
    // }

    // public static function findIdentity($id)
    // {
    //     return static::findOne($id);
    // }

    // public static function findIdentityByAccessToken($token, $type = null)
    // {
    //     return static::findOne(['access_token' => $token]);
    // }

    // public function getId()
    // {
    //     return $this->id;
    // }

    // public function getAuthKey()
    // {
    //     return $this->authKey;
    // }

    // public function getLat()
    // {
    //     return $this->latitude;
    // }

    // public function getLong()
    // {
    //     return $this->longitude;
    // }

    // public function validateAuthKey($authKey)
    // {
    //     return $this->authKey === $authKey;
    // }
// }
