# api
simple api connector for Laravel 5.1, please don't use this for production


Installation
------------

1. Run `composer require "mediakreasi/api": "dev-master"` this will add require to the `require` key in `composer.json` and run `composer install`
2. Add `Mediakreasi\Api\ApiServiceProvider::class,` to the `providers` key in `config/app.php`
3. Add `'Api' => Mediakreasi\Api\Facades\Api::class,` to the `aliases` key in `config/app.php`

Require
-------
This package using Guzzle
