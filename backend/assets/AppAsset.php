<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
        'js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js',
        'js/bootstrap-daterangepicker/moment.min.js',
        'js/bootstrap-daterangepicker/daterangepicker.min.js',
        'js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js',
        'js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js',
        'js/jQuery-BlockUI/jquery.blockUI.min.js',
        'js/sparklines/jquery.sparkline.min.js',
        'js/jquery-easing/jquery.easing.min.js',
        'js/easypiechart/jquery.easypiechart.min.js',
        'js/flot/jquery.flot.min.js',
        'js/flot/jquery.flot.time.min.js',
        'js/flot/jquery.flot.selection.min.js',
        'js/flot/jquery.flot.resize.min.js',
        'js/flot/jquery.flot.pie.min.js',
        'js/flot/jquery.flot.stack.min.js',
        'js/flot/jquery.flot.crosshair.min.js',
        'js/jquery-todo/js/paddystodolist.js',
        'js/timeago/jquery.timeago.min.js',
        'js/fullcalendar/fullcalendar.min.js',
        'js/jQuery-Cookie/jquery.cookie.min.js',
        'js/gritter/js/jquery.gritter.min.js',
        'js/script.js'
    ];
    public $depends = [
        'backend\assets\myYiiAsset',
    ];
}
