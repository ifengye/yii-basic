<?php

namespace app\modules\stock;

use Yii;

class Stock extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\stock\controllers';

    public function init()
    {
        parent::init();

        Yii::configure($this, require(__DIR__ . '/config.php'));
    }
}
