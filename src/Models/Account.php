<?php

namespace AoBankAccounts\Models;

use AoComments\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{

    //------------------------------------------------------------------------------------------------------------------
    // DYNAMIC
    //------------------------------------------------------------------------------------------------------------------

    public $dynamicClass;

    public $dynamicTable;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function dynamicWith()
    {
        return $this->belongsToMany($this->dynamicClass, $this->dynamicTable);
    }

    //------------------------------------------------------------------------------------------------------------------
    // ATTRIBUTES
    //------------------------------------------------------------------------------------------------------------------

    protected $table = 'ao_bank_accounts_accounts';

    protected $fillable = ['bank_id', 'holder', 'agency_number', 'operation_code', 'account_number'];

    //------------------------------------------------------------------------------------------------------------------
    // RELATIONSHIPS
    //------------------------------------------------------------------------------------------------------------------

    /**
     * @return Bank|\Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

}