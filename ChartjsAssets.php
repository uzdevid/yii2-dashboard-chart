<?php

namespace uzdevid\dashboard\chart;

use yii\web\AssetBundle;

class ChartjsAssets extends AssetBundle {
    public $sourcePath = '@vendor/uzdevid/yii2-dashboard-chart/assets';
    public $js = [
        'js/chart.js/chart.min.js'
    ];
}