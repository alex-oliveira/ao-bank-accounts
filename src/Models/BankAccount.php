<?php

namespace AoBankAccounts\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankAccount extends Model
{

    use SoftDeletes;

    //------------------------------------------------------------------------------------------------------------------
    // DYNAMIC
    //------------------------------------------------------------------------------------------------------------------

    public $dynamicClass;

    public $dynamicTable;

    public $dynamicForeign;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function dynamicWith()
    {
        return $this->belongsToMany($this->dynamicClass, $this->dynamicTable, 'bank_account_id', $this->dynamicForeign);
    }

    //------------------------------------------------------------------------------------------------------------------
    // ATTRIBUTES
    //------------------------------------------------------------------------------------------------------------------

    protected $table = 'ao_ba_bank_accounts';

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