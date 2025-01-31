<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class BmdAppAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    public $baseUrl = '@web';
	//public $baseUrl = '@web/../themes/bmd';
    public $css = [
        'css/site.css',
		'../themes/bmd/bootstrap/dist/css/bootstrap.css',
    ];
    public $js = [
	'../themes/bmd/bootstrap/dist/js/bootstrap.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
