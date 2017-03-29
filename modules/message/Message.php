<?php

namespace app\modules\message;

use Yii;

class Message extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\message\controllers';

    public function init()
    {
        parent::init();

        Yii::configure($this, require(__DIR__ . '/config.php'));
    }
}
