<?php

namespace AoBankAccounts\Utils\Tools;

use AoScrud\Utils\Traits\BuildTrait;
use Illuminate\Support\Facades\Schema as LaraSchema;
use Illuminate\Database\Schema\Blueprint;

class Schema
{
    use BuildTrait;

    protected $prefix = 'ao_ba_bank_accounts_x_';

    public function table($table)
    {
        return $this->prefix . '' . $table;
    }

    public function create($table, $fk = null, $type = 'integer')
    {
        if (is_null($fk))
            $fk = str_singular($table) . '_id';

        LaraSchema::create($this->table($table), function (Blueprint $t) use ($table, $fk, $type) {
            $t->$type($fk)->unsigned();
            $t->foreign($fk, 'fk_' . $table . '_x_ao_ba_bank_accounts')->references('id')->on($table);

            $t->bigInteger('bank_account_id')->unsigned();
            $t->foreign('bank_account_id', 'fk_ao_ba_bank_accounts_x_' . $table)->references('id')->on('ao_ba_bank_accounts');

            $t->primary([$fk, 'bank_account_id'], 'pk_ao_ba_bank_accounts_x_' . $table);
        });
    }

    public function drop($table)
    {
        LaraSchema::dropIfExists($this->table($table));
    }

}