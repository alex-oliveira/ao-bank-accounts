<?php

if (!function_exists('AoBankAccounts')) {

    /**
     * @return \AoBankAccounts\Utils\Tools
     */
    function AoBankAccounts()
    {
        return app('AoBankAccounts');
    }

}