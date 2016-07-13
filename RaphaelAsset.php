<?php
/**
 * @link https://github.com/hrmohseni/yii2-raphaeljs
 * @copyright Copyright (c) 2015
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace \rafk\raphaeljs;

use yii\web\AssetBundle;
/**
 * ChartPluginAsset.php
 * 
 */
class RaphaelAsset extends AssetBundle {
    public $sourcePath = '@bower-assets/raphael';
    public $depends = [
        'yii\web\YiiAsset'
    ];
    
    public function init()
    {
        $this->js = YII_DEBUG ? ['raphael.js'] : ['raphael.min.js'];
    }

}