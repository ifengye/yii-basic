<?php
/**
 * 配置业务模块
 */
return [
    // 用户模块
    'user' => [
        'class' => 'app\modules\user\User',
    ],
    // 商品模块
    'goods' => [
        'class' => 'app\modules\goods\Goods',
    ],
    // 店家模块
    'store' => [
        'class' => 'app\modules\store\Store',
    ],
    // 批发商模块
    'supply' => [
        'class' => 'app\modules\supply\Supply',
    ],
    // 订单模块
    'order' => [
        'class' => 'app\modules\order\Order',
    ],
    // 库存模块
    'stock' => [
        'class' => 'app\modules\stock\Stock',
    ],
    // 支付模块
    'pay' => [
        'class' => 'app\modules\pay\Pay',
    ],
    // 消息模块
    'message' => [
        'class' => 'app\modules\message\Message',
    ],
];