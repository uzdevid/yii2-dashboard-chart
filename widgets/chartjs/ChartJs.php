<?php

namespace uzdevid\dashboard\chart\widgets\chartjs;

use yii\base\Widget;

class ChartJs extends Widget {
    public string $url;

    public function run() {
        return $this->render('index');
    }
}