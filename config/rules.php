<?php
/**
 * rules.php rewrite路由规则
 */

return [
    '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>', //模块相关规则
];