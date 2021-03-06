<?php

namespace AoBankAccounts\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

    //------------------------------------------------------------------------------------------------------------------
    // ATTRIBUTES
    //------------------------------------------------------------------------------------------------------------------

    protected $table = 'ao_ba_banks';

    protected $fillable = ['number', 'alias', 'name'];

    //------------------------------------------------------------------------------------------------------------------
    // METHODS
    //------------------------------------------------------------------------------------------------------------------

    /**
     * @return BankAccount[]|\Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bankAccounts()
    {
        return $this->hasMany(BankAccount::class);
    }

}