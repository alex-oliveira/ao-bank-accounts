<?php

namespace AoBankAccounts\Utils;

use AoScrud\Utils\Traits\Build;
use AoTools\Router as BaseRouter;

class Router extends BaseRouter
{

    use Build;

    protected $configs = [
        'prefix' => 'bank-accounts',
        'as' => 'bank-accounts.',
    ];

    protected $routes = [
        ['method' => 'get',     'url' => '/',             'configs' => ['as' => 'index',      'uses' => '@index']],
        ['method' => 'get',     'url' => '/{id}',         'configs' => ['as' => 'show',       'uses' => '@show']],
        ['method' => 'post',    'url' => '/',             'configs' => ['as' => 'store',      'uses' => '@store']],
        ['method' => 'put',     'url' => '/{id}',         'configs' => ['as' => 'update',     'uses' => '@update']],
        ['method' => 'put',     'url' => '/{id}/restore', 'configs' => ['as' => 'restore',    'uses' => '@restore']],
        ['method' => 'delete',  'url' => '/{id}',         'configs' => ['as' => 'destroy',    'uses' => '@destroy']],
    ];

    public function foreign($foreign)
    {
        $this->configs['prefix'] = '{' . $foreign . '}/bank-accounts';
        return $this;
    }

    public function controller($controller)
    {
        $actions = ['index', 'show', 'store', 'update', 'restore', 'destroy'];

        foreach ($actions as $key => $action)
            $this->routes[$key]['configs']['uses'] = $controller . '@' . $action;

        return $this;
    }

}