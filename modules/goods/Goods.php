<?php

namespace app\modules\goods;

use Yii;

class Goods extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\goods\controllers';

    public function init()
    {
        parent::init();

        Yii::configure($this, require(__DIR__ . '/config.php'));
    }
}
