<?php

namespace app\modules\user;

use Yii;

class User extends \yii\base\Module
{
    public $controllerNamespace = 'app\modules\user\controllers';

    public function init()
    {
        parent::init();

        Yii::configure($this, require(__DIR__ . '/config.php'));
    }
}
