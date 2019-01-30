<?php

namespace Usuario;
use Zend\Router\Http\Literal;

return [
    'router' => [
        'routes' => [
            'usuario' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/usuario',
                    'defaults' => [
                        'controler' => Controler\IndexControler::class,
                        'action' => 'index',
                    ],                    
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactorie::class,
        ]
    ]
];