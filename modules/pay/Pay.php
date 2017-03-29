<?php

namespace app\modules\pay;

use Yii;

class Pay extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\pay\controllers';

    public function init()
    {
        parent::init();

        Yii::configure($this, require(__DIR__ . '/config.php'));
    }
}
