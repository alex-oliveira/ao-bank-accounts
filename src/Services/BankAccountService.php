<?php

namespace AoBankAccounts\Services;

use AoBankAccounts\Models\BankAccount;
use AoScrud\Core\ScrudService;

class BankAccountService extends ScrudService
{

    //------------------------------------------------------------------------------------------------------------------
    // DYNAMIC
    //------------------------------------------------------------------------------------------------------------------

    protected $dynamicClass;

    protected $dynamicTable;

    protected $dynamicForeign;

    public function setDynamicClass($dynamicClass)
    {
        $parts = explode('.', app()->make($dynamicClass)->bankAccounts()->getQualifiedForeignKeyName());

        $this->dynamicClass = $dynamicClass;
        $this->dynamicTable = $parts[0];
        $this->dynamicForeign = $parts[1];

        return $this;
    }

    protected function applyDynamicFilter($config)
    {
        $model = $config->model();
        $model->dynamicClass = $this->dynamicClass;
        $model->dynamicTable = $this->dynamicTable;
        $model->dynamicForeign = $this->dynamicForeign;

        $id = $config->data()->get($this->dynamicForeign);

        if (!app()->make($this->dynamicClass)->find($id))
            abort(404);

        $config->model($model->whereHas('dynamicWith', function ($query) use ($id) {
            $query->where('id', $id);
        }));
    }

    //------------------------------------------------------------------------------------------------------------------
    // OWNER
    //------------------------------------------------------------------------------------------------------------------
    
    protected $owner;

    protected function setOwner($config)
    {
        $this->owner = app()->make($this->dynamicClass)->find($config->data()->get($this->dynamicForeign));
        if (!$this->owner)
            abort(404);
    }

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCTOR
    //------------------------------------------------------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();

        // SEARCH //----------------------------------------------------------------------------------------------------

        $this->search
            ->model(BankAccount::class)
            ->columns(['id', 'agency_number', 'account_number', 'operation_code'])
            ->otherColumns(['holder', 'bank_id', 'created_at', 'updated_at'])
            ->setAllOrders()
            ->with([
                'bank' => [
                    'columns' => ['id', 'name'],
                    'otherColumns' => ['number', 'alias', 'image', 'created_at', 'updated_at']
                ]
            ])
            ->rules([
                'id' => '=',
                'bank_id' => '=',
                [
                    'holder' => '%like%|get:search',
                    'agency_number' => '%like%|get:search',
                    'operation_code' => '%like%|get:search',
                    'account_number' => '%like%|get:search',
                ]
            ])
            ->onPrepare(function ($config) {
                $this->applyDynamicFilter($config);
            });

        // READ //------------------------------------------------------------------------------------------------------

        $this->read
            ->model(BankAccount::class)
            ->columns($this->search->columns()->all())
            ->with($this->search->with()->all())
            ->otherColumns($this->search->otherColumns()->all())
            ->onPrepare(function ($config) {
                $this->applyDynamicFilter($config);
            });

        // CREATE //----------------------------------------------------------------------------------------------------

        $this->create
            ->model(BankAccount::class)
            ->columns(['bank_id', 'holder', 'agency_number', 'operation_code', 'account_number'])
            ->rules([
                'holder' => 'required|max:255',
                'agency_number' => 'required|max:20',
                'operation_code' => 'required|int',
                'account_number' => 'required|max:20',
                'bank_id' => 'required|integer|exists:ao_ba_banks,id'
            ])->onPrepare(function ($config) {
                $this->setOwner($config);
            })
            ->onExecuteEnd(function ($config, $result) {
                $this->owner->bankAccounts()->attach($result->id);
            });

        // UPDATE //----------------------------------------------------------------------------------------------------

        $this->update
            ->model(BankAccount::class)
            ->columns($this->create->columns()->all())
            ->rules($this->create->rules())
            ->onPrepare(function ($config) {
                $this->applyDynamicFilter($config);
            });

        // DESTROY //---------------------------------------------------------------------------------------------------

        $this->destroy
            ->model(BankAccount::class)
            ->onPrepare(function ($config) {
                $this->applyDynamicFilter($config);

            })->onExecute(function ($config) {
                //$this->setOwner($config);
                //$this->owner->bankAccounts()->detach($config->data()->get('id'));
            });

        // RESTORE //---------------------------------------------------------------------------------------------------

        $this->restore
            ->model(BankAccount::class)
            ->onPrepare(function ($config) {
                $this->applyDynamicFilter($config);
            });
    }

}