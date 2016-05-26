<?php
namespace api\controllers;

use Yii;
use yii\web\HttpException;
use yii\base\UserException;

/**
 * Site controller
 */
class SiteController extends BaseController
{    
    /**
     * 首页
     */
    public function actionIndex()
    {
        $this->returnJson(self::REQUEST_NORMAL_MSGCODE, '', '欢迎！');
    }

    /**
     * by cenyol 2016-05-26 21:36:14
     * 错误信息
     */
    public function actionError()
    {
        if (($exception = Yii::$app->getErrorHandler()->exception) === null) {
            // action has been invoked not from error handler, but by direct route, so we display '404 Not Found'
            $exception = new HttpException(404, 'Api地址有误！');
        }

        if ($exception instanceof HttpException) {
            $code = $exception->statusCode;
        } else {
            $code = $exception->getCode();
        }
        if ($exception instanceof \Exception) {
            $name = $exception->getName();
        } else {
            $name = $this->defaultName ?: Yii::t('yii', 'Error');
        }
        if ($code) {
            $name .= " (#$code)";
        }

        if ($exception instanceof UserException) {
            $message = $exception->getMessage();
        } else {
            $message = $this->defaultMessage ?: Yii::t('yii', 'An internal server error occurred.');
        }

        return $this->returnJson(self::REQUEST_WRONG_MSGCODE, '', "$name: $message");
    }

}
