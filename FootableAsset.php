<?php

namespace yii\footable;

use \Yii;

class FootableAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/footable';

    public $js = [
        'js/footable.js'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}