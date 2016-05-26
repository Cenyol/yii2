<?php

namespace common\models;

use yii;
/**
 * 工具类
 * @author cenyol
 *
 */
class Utils {

    /**
     * 获取客户端IP地址
     */
    public static function get_client_ip() {
        if(getenv('HTTP_CLIENT_IP')){
            $client_ip = getenv('HTTP_CLIENT_IP');
        } elseif(getenv('HTTP_X_FORWARDED_FOR')) {
            $client_ip = getenv('HTTP_X_FORWARDED_FOR');
        } elseif(getenv('REMOTE_ADDR')) {
            $client_ip = getenv('REMOTE_ADDR');
        } else {
            $client_ip = $_SERVER['REMOTE_ADDR'];
        }
        return $client_ip;
    }
    
    /**
     * 获取服务器端IP地址
     */
    public static function get_server_ip() {
        if (isset($_SERVER)) {
            if($_SERVER['SERVER_ADDR']) {
                $server_ip = $_SERVER['SERVER_ADDR'];
            } else {
                $server_ip = $_SERVER['LOCAL_ADDR'];
            }
        } else {
            $server_ip = getenv('SERVER_ADDR');
        }
        return $server_ip;
    }
    
    // 过滤掉emoji表情，参考：http://pein0119.github.io/2015/09/20/PHP%E5%88%A0%E9%99%A4%E5%AD%97%E7%AC%A6%E4%B8%B2%E4%B8%AD%E7%9A%84emoji%E8%A1%A8%E6%83%85/
    public static function filterEmoji($str) {
        $str = preg_replace_callback('/./u', function (array $match) {
                return strlen($match[0]) >= 4 ? '' : $match[0];
            }, $str);
        return $str;
    }
    
    /**
     * 生成随意串，默认6位
     */
    public static function getRandChar($length = 6, $isNeedOtherChar = false){
        $str = '';
        $strPol = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
        if($isNeedOtherChar)
            $strPol .= '~@#()_';
        
        $max = strlen($strPol)-1;
        for($i=0; $i < $length; $i++){
            $str.=$strPol[rand(0,$max)]; //rand($min,$max)生成介于min和max两个数之间的一个随机整数
        }
        return $str;
    }
    
    /**
     * todo
     * 根据时间戳，返回特定的时间格式
     */    
    public static function timeFormat( $timeStamp, $format = 'Y-m-d H:i'){
        return date($format, $timeStamp);
    }
    
    /**
     * by cenyol 2016-02-11 17:59:20
     * 删除文件
     */
    public static function deleteFile( $path ){
        $result = false;
        if (file_exists($path)) {
            $result=unlink ($path);
        }
        return $result;
    }
    
    /**
     * by cenyol 2016-02-11 16:06:19
     * 递归创建文件夹
     */
    public static function createFolder($path)
    {
        if (!file_exists($path))
        {
            Utils::createFolder(dirname($path));
            mkdir($path, 0777);
        }
    }
    
    /**
     * by cenyol 2016-02-10 11:33:59
     * 获取当天的凌晨00：00：00的时间戳
     */
    public static function todayStartTimestamp( $time = 0 ){
        // 如果没有传递参数表示获取就是今天的凌晨时间戳，否则返回的是那个时间戳的那天凌晨
        $time = $time == 0 ? time() : $time;
        
        $todayStr = date('Y-m-d', $time);
        $todayTimeStamp = strtotime($todayStr);
        return $todayTimeStamp;
    }
    
    /**
     * by cenyol 2016-02-18 16:55:19
     * Curl， 模拟一些post和get操作
     */
    public static function curl($url, $data = '', $post = false){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if($post){//post提交方式
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
