<?php

return array(
    'name' => 'Сustom Assembly Time',
    'description' => /*_wp*/
        ('Добавление дополнительного времени доставки если в корзине есть некоторый товар.'),
    'version' => '1.0.0',
    'vendor' => 1010465,
    'img' => 'img/customassemblytime.png',
    'frontend' => true,
    'shop_settings' => false,
    'handlers' => array(
        'frontend_order_cart_vars' => 'frontendCustomAssemblyTime',
        'frontend_footer' => 'frontendFoot',
        //'order_action.create' => 'orderActionCreate',
    )
);