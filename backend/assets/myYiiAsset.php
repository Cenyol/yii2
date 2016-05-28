<?php
/**
 * cenyol
 * 2016年5月28日 上午10:22:27
 */

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the base javascript files for the Yii Framework.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class myYiiAsset extends AssetBundle
{
    public $sourcePath = '@yii/assets';
    public $js = [
        'yii.js',
    ];
    public $depends = [
        'backend\assets\myJqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
