# api
simple api connector, please don't use this for production


Installation
------------

1. Run `composer require "mediakreasi/api": "dev-master"` this will add require to the `require` key in `composer.json` and run `composer install`
2. Add `'Mediakreasi\Api\ApiServiceProvider',` to the `providers` key in `config/app.php`
3. Add `'Api' => 'Mediakreasi\Api\Facades\Api',` to the `aliases` key in `config/app.php`

Require
-------
This package using Guzzle
