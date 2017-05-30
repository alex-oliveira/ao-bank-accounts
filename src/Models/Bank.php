<?php

namespace AoBankAccounts\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

    //------------------------------------------------------------------------------------------------------------------
    // ATTRIBUTES
    //------------------------------------------------------------------------------------------------------------------

    protected $table = 'ao_bank_accounts_banks';

    protected $fillable = ['number', 'alias', 'name'];

    //------------------------------------------------------------------------------------------------------------------
    // METHODS
    //------------------------------------------------------------------------------------------------------------------

    /**
     * @return Account[]|\Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

}