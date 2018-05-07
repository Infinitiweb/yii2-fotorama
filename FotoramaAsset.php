<?php

namespace infinitiweb\widgets\fotorama;


use yii\web\AssetBundle;

/**
 * Class FotoramaAsset
 * @package infinitiweb\widgets\fotorama
 */
class FotoramaAsset extends AssetBundle
{
    public $sourcePath = '@bower/fotorama/';

    public $css = [
        'fotorama.css',
    ];

    public $js = [
        'fotorama.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public $version = '4.6.4';

}
