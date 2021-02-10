<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string|null $login
 * @property string|null $password
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public static function findByUsername($username)
    {
        return User::find()->where(['username' => $username])->one();
    }

    public function validatePassword($password)
    {
        if($this->password == $password)
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['password'], 'string'],
            [['login'], 'string', 'max' => 255],
        ];
    }

}
