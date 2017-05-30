# Ao-Bank-Accounts

### 1) Installing
````
$ composer require alex-oliveira/ao-bank-accounts
````

### 2) Configuring "config/app.php" file
````
'providers' => [
    /*
     * Vendor Service Providers...
     */
    AoBankAccounts\ServiceProvider::class,
],
````

### 3) Publish migrations
````
$ php artisan vendor:publish
$ composer dump
````

### 4) Seed database
````
$ php artisan db:seed
````





# Utilization 

## Migration

### Up
````
public function up()
{
    AoBankAccounts()->schema()->create('users');
}
````
the same that
````
public function up()
{    
    Schema::create('ao_ba_bank_accounts_x_users', function (Blueprint $table) {
        $table->integer('user_id')->unsigned();
        $table->foreign('user_id', 'fk_users_x_ao_ba_bank_accounts')->references('id')->on('users');
        
        $table->bigInteger('bank_account_id')->unsigned();
        $table->foreign('bank_account_id', 'fk_ao_ba_bank_accounts_x_users')->references('id')->on('ao_ba_bank_accounts');
        
        $table->primary(['user_id', 'bank_account_id'], 'pk_ao_ba_bank_accounts_x_users');
    });
}
````

### Down
````
public function down()
{
    AoLogs()->schema()->drop('users');
}
````
the same that
````
public function down()
{    
    Schema::dropIfExists('ao_ba_bank_accounts_x_users');
}
````





## Model
````
namespace App\Models;

use AoBankAccounts\Models\BankAccount;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    /**
     * @return BankAccount[]|\Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function bankAccounts()
    {
        return $this->belongsToMany(BankAccount::class, AoBankAccounts()->schema()->table($this->getTable()));
    }
    
}
````
the same that
````
return $this->belongsToMany(BankAccount::class, 'ao_ba_bank_accounts_x_users');
````





## Controller
````
namespace App\Http\Controllers\Users;

use AoBankAccounts\Controllers\AoBankAccountsController;
use App\Models\User;

class CommentsController extends AoBankAccountsController
{

    protected $dynamicClass = User::class;
    
}
````





## Routes
````
Route::group(['prefix' => 'users', 'as' => 'users.'], function () {

    AoBankAccounts()->router('Users\BankAccountsController')->foreign('user_id')->make();
    .
    .
    .
    
});
````

### Checking routes
````
$ php artisan route:list
````