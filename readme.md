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

### 3) Create "config/ao.php" file
````
return [
    .
    .
    .
    'models' => [
        'users' => App\Models\User::class,
    ],
        
    'tables' => [
        'users' => 'users'
    ]
    .
    .
    .
];
````

### 4) Publish migrations
````
$ php artisan vendor:publish
````