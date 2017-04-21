<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "system_dict".
 *
 * @property integer $id
 * @property integer $type
 * @property string $key
 * @property string $value
 * @property integer $created_time
 */
class SystemDict extends BaseModel
{
    public $file;
    
    /**
     * by cenyol 2016-05-14 19:41:17
     * 获取背景图地址
     */
    public static function getBgkPic(){
        return Yii::$app->request->baseUrl . '/images/loquat.jpg';
    }
    
    
    public static function getProductBgUrl(){
        $model = SystemDict::findModel(6);
        return Yii::$app->params['backendRootUrl'] . $model->value;
    }
    
    /**
     * by cenyol 2016-04-17 22:02:29
     * 获取token，并进行缓存
     */
    public static function getAccessToken(){
        $accessToken = SystemDict::findOne(1);
        $accessTokenJsonObject = json_decode($accessToken->value);
        
        // 如果过期，重新获取
        if ( (time() - $accessToken->created_time) >= $accessTokenJsonObject->expires_in){
            $accessToken->value = Utils::curl('https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid='.Yii::$app->params['wechat_appid']
                .'&secret='.Yii::$app->params['wechat_secret']);
            $accessToken->created_time = time() + 5;
            if ($accessToken->save()){
                $accessTokenJsonObject = json_decode($accessToken->value);
            }
        }
        return $accessTokenJsonObject->access_token;
    }
    
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'system_dict';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'created_time'], 'integer'],
            [['value'], 'string'],
            [['file'], 'file'],
            [['key'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'key' => 'Key',
            'value' => 'Value',
            'created_time' => 'Created Time',
        ];
    }
}
