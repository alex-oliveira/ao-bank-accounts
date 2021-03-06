<?php

namespace AoBankAccounts\Utils;

use AoBankAccounts\Utils\Tools\Router;
use AoBankAccounts\Utils\Tools\Schema;

class Tools
{
    //------------------------------------------------------------------------------------------------------------------
    // SCHEMA
    //------------------------------------------------------------------------------------------------------------------

    /**
     * @return Schema
     */
    public function schema()
    {
        return Schema::build();
    }

    //------------------------------------------------------------------------------------------------------------------
    // ROUTER
    //------------------------------------------------------------------------------------------------------------------

    /**
     * @return Router
     */
    public function router($controller = null)
    {
        $router = Router::build();

        if (isset($controller))
            $router->controller($controller);

        return $router;
    }

}