<?php

namespace LA09R\PackageOne\App;

use Illuminate\Support\Facades\Route;
use LA09R\PackageOne\App\Http\Controllers\MainController;
use LA09R\StarterKit\UI\Vue\Inertia\App\Providers\RouteServiceProvider;

class Router
{
    public const NAME_ID = 'package.one.';
    public const PATH_ID = '/package-one';

    public const ROUTES_WEB = [
        [
            'middleware' => ['auth'],
            'methods' => [
                [
                    'id'    => 'get',
                    'items' => [
                        [
                            'url'     => RouteServiceProvider::HOME . self::PATH_ID . '/index',
                            'name'    => self::NAME_ID . RouteServiceProvider::PREFIX_WEB . '.index',
                            'handler' => [
                                'controller' => MainController::class,
                                'method'     => 'webIndex',
                            ],
                        ],
                    ]
                ]
            ],
        ],
        [
            'middleware' => ['auth', /*'ACCESS'*/],
            'methods' => [
                [
                    'id'    => 'get',
                    'items' => [
                        [
                            'url'     => RouteServiceProvider::HOME . self::PATH_ID . '/edit',
                            'name'    => self::NAME_ID . RouteServiceProvider::PREFIX_WEB . '.edit',
                            'handler' => [
                                'controller' => MainController::class,
                                'method'     => 'webEdit',
                            ],
                        ],
                        [
                            'url'     => RouteServiceProvider::HOME . self::PATH_ID . '/list',
                            'name'    => self::NAME_ID . RouteServiceProvider::PREFIX_WEB . '.list',
                            'handler' => [
                                'controller' => MainController::class,
                                'method'     => 'webList',
                            ],
                        ],
                        [
                            'url'     => RouteServiceProvider::HOME . self::PATH_ID . '/settings',
                            'name'    => self::NAME_ID . RouteServiceProvider::PREFIX_WEB . '.settings',
                            'handler' => [
                                'controller' => MainController::class,
                                'method'     => 'webSettings',
                            ],
                        ],
                    ]
                ]
            ],
        ],
    ];

    public const ROUTES_API = [
        [
            'middleware' => ['auth:sanctum'],
            'methods' => [
                [
                    'id'    => 'get',
                    'items' => [
                        [
                            'url'     => RouteServiceProvider::BACK . self::PATH_ID . '/select/{id}',
                            'name'    => self::NAME_ID . RouteServiceProvider::PREFIX_API . '.select',
                            'handler' => [
                                'controller' => MainController::class,
                                'method'     => 'apiSelect',
                            ],
                        ],
                    ]
                ],
                [
                    'id'    => 'post',
                    'items' => [
                        [
                            'url'     => RouteServiceProvider::BACK . self::PATH_ID . '/update',
                            'name'    => self::NAME_ID . RouteServiceProvider::PREFIX_API . '.update',
                            'handler' => [
                                'controller' => MainController::class,
                                'method'     => 'apiUpdate',
                            ],
                        ],
                    ]
                ],
            ],
        ],
        [
            'middleware' => ['auth:sanctum', /*'ACCESS'*/],
            'methods' => [
                [
                    'id'    => 'get',
                    'items' => [
                        [
                            'url'     => RouteServiceProvider::BACK . self::PATH_ID . '/new',
                            'name'    => self::NAME_ID . RouteServiceProvider::PREFIX_API . '.new',
                            'handler' => [
                                'controller' => MainController::class,
                                'method'     => 'apiNew',
                            ],
                        ],
                        [
                            'url'     => RouteServiceProvider::BACK . self::PATH_ID . '/list',
                            'name'    => self::NAME_ID . RouteServiceProvider::PREFIX_API . '.list',
                            'handler' => [
                                'controller' => MainController::class,
                                'method'     => 'apiList',
                            ],
                        ],
                    ]
                ],
                [
                    'id'    => 'post',
                    'items' => [
                        [
                            'url'     => RouteServiceProvider::BACK . self::PATH_ID . '/insert',
                            'name'    => self::NAME_ID . RouteServiceProvider::PREFIX_API . '.insert',
                            'handler' => [
                                'controller' => MainController::class,
                                'method'     => 'apiInsert',
                            ],
                        ],
                        [
                            'url'     => RouteServiceProvider::BACK . self::PATH_ID . '/delete',
                            'name'    => self::NAME_ID . RouteServiceProvider::PREFIX_API . '.delete',
                            'handler' => [
                                'controller' => MainController::class,
                                'method'     => 'apiDelete',
                            ],
                        ],
                    ]
                ],
            ],
        ],
    ];

    public static function webRoutes()
    {
        RouteServiceProvider::createRoutesByMiddleware(self::ROUTES_WEB);
    }

    public static function apiRoutes()
    {
        RouteServiceProvider::createRoutesByMiddleware(self::ROUTES_API);
    }
}