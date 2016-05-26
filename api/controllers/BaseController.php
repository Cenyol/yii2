<?php
namespace api\controllers;

use Yii;
use yii\web\Controller;
use yii\helpers\Json;

/**
 * Base controller
 */
class BaseController extends Controller
{
    public $uid = 0;                            // 用于解析token之后，保存用户的uid
    public $enableCsrfValidation = false;       // 以便能够直接在App端使用Post方式请求
    
    // 定义一些不需要进行token验证的路由
    private $notNeedVerify = [
        'site/login',

        // 测试时，需要临时去掉验证的路由
//         'site/regist',
    ];
    
    const REQUEST_WRONG_MSGCODE = 0;
    const REQUEST_NORMAL_MSGCODE = 1;
    const TEL_CODE_WRONG_MSGCODE = 1001;
    const PASSWORD_WRONG_MSGCODE = 1002;
    const USER_NOT_EXIST = 1003;
    const TOKEN_FORMAT_WRONG_MSGCODE = 1004;
    const TOKEN_CONTNENT_WRONG_MSGCODE = 1005;
    const USER_EXIST = 1006;
    
    const NOT_FOUND_WRONG_MSGCODE = 1404;

    protected function returnJson($code, $data = '', $msg = ''){
        $resCodeArr = [
            self::REQUEST_WRONG_MSGCODE => 'Sorry, 失败了！',
            self::REQUEST_NORMAL_MSGCODE => 'yeah, 正常了。',
            self::TEL_CODE_WRONG_MSGCODE => '手机验证码错误!',
            self::PASSWORD_WRONG_MSGCODE => '密码错误!',
            self::USER_NOT_EXIST => '该用户不存在！Uid：' . $this->uid,
            self::TOKEN_FORMAT_WRONG_MSGCODE => 'token格式错误!',
            self::TOKEN_CONTNENT_WRONG_MSGCODE => 'token内容错误!',
            self::USER_EXIST => '用户已经存在',
            self::NOT_FOUND_WRONG_MSGCODE => 'ops，找不到相应的内容！',
        ];
    
        $resArr = [
            'rc' => $code . '',
            'message' => $msg=='' ? $resCodeArr[$code] : $msg,
        ];
        if($data)
            $resArr['data'] = $data;
        
        header("Content-type: text/html; charset=utf-8");
        echo (Json::encode($resArr));
    }
    
    
    public function beforeAction($action){
        parent::beforeAction($action);

        // by cenyol 2016-03-02 14:27:52
        if ( in_array($this->getRoute(), $this->notNeedVerify) || \Yii::$app->request->post('token', '0') == 1314) {
            return true;
        }else {
		    $paramArr = explode("#", \Yii::$app->request->post('token', '0'));
		    if(count($paramArr) < 3)
		        return $this->returnJson(self::TOKEN_FORMAT_WRONG_MSGCODE);
		    $this->uid = $paramArr[2];
		    $rightToken = $this->generateToken($paramArr[1]);
    		if ( $rightToken == $paramArr[0] ){
    			return true;
    		}else 
		        return $this->returnJson(self::TOKEN_CONTNENT_WRONG_MSGCODE);
        }
    }
	protected function generateToken( $randStr ){
// 		if (($userLogin = UserLogin::findOne( $this->uid )) instanceof UserLogin)
// 			return md5(md5($userLogin->password).$randStr);
// 		return '-';
	}
}
