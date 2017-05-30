<?php

namespace AoBankAccounts\Controllers;

use AoBankAccounts\Services\BankAccountService;
use AoScrud\Core\ScrudController;

class AoBankAccountsController extends ScrudController
{

    //------------------------------------------------------------------------------------------------------------------
    // DYNAMIC
    //------------------------------------------------------------------------------------------------------------------

    protected $dynamicClass;

    public function getDynamicClass()
    {
        return $this->dynamicClass;
    }

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCTOR
    //------------------------------------------------------------------------------------------------------------------

    public function __construct(BankAccountService $service)
    {
        $this->service = $service->setDynamicClass($this->dynamicClass);
    }

}