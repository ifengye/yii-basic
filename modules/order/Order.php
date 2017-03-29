<?php

namespace app\modules\order;

use Yii;

class Order extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\order\controllers';

    public function init()
    {
        parent::init();

        Yii::configure($this, require(__DIR__ . '/config.php'));
    }
}
