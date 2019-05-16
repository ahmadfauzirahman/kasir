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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "lib/fontawesome-free/css/all.min.css",
        "lib/ionicons/css/ionicons.min.css",
        "lib/typicons.font/typicons.css",
        "lib/jqvmap/jqvmap.min.css",
        "css/azia.css"
    ];
    public $js = [
        "lib/jquery/jquery.min.js",
        "lib/bootstrap/js/bootstrap.bundle.min.js",
        "lib/ionicons/ionicons.js",
        "lib/jquery.flot/jquery.flot.js",
        "lib/jquery.flot/jquery.flot.resize.js",
        "lib/jqvmap/jquery.vmap.min.js",
        "lib/jqvmap/maps/jquery.vmap.world.js",
        "lib/perfect-scrollbar/perfect-scrollbar.min.js",
        "js/azia.js",
        "js/dashboard.sampledata.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
