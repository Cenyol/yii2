<?php
namespace common\models;

use yii\db\ActiveRecord;
use yii\web\NotFoundHttpException;

/**
 * @author cenyol
 */
class BaseModel extends ActiveRecord
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;

    public static $statusArray = [
        self::STATUS_ACTIVE => '正常',
        self::STATUS_DELETED => '无效'
    ];
    
    /**
     * by cenyol 2016-06-01 11:23:12
     * 通过id获取name，这方法貌似可以通用，先写这里吧
    */
    public static function getNameById($id){
        $model = self::findOne($id);
        if($model && $model->hasAttribute('name')){
            return $model->name;
        }
        return '';
    }
    
    /**
     * by cenyol 2016-02-28 15:09:32
     * 重写save函数
     */
    public function save($runValidation = true, $attributeNames = null){
        if (self::hasAttribute('created_time') && $this->created_time == '')
            $this->created_time = time();
    
        return parent::save($runValidation, $attributeNames);
    }

    /**
     * by cenyol 2016-04-20 11:05:15
     * 通过指定某些字段来设定对象的属性
     * 同时验证了字段的合法性
     */
    public function setAttributesByJson($jsonStr, $safeAttrArray){
        $needAttrArray = [];
        $postArray = json_decode($jsonStr);
        if($postArray){
            foreach ( $safeAttrArray as $key) {
                if (isset($postArray->$key))
                    $needAttrArray[$key] = $postArray->$key;
            }
        }
        $this->setAttributes($needAttrArray);
    }

    /**
     * 来自原有框的方法，直接用来替代findOne，省去了判断非空操作
     */
    public static function findModel($id)
    {
        if (($model = self::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The Model '.self::className().' does not exist.');
        }
    }
    
    // 用于调试的时候，显示一些错误信息
    public function beforeValidate(){
        if ($this->hasErrors()){
            var_dump($this->errors);
        }
        return parent::beforeValidate();
    }
}

?>