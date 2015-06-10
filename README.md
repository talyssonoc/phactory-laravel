# Phactory Laravel

With Phactory Laravel you'll be able to use [Phactory](http://phactory.org/) with Laravel 5.

If you don't know what `Phactory` is:

	Phactory is an alternative to using database fixtures in your PHP unit tests. Instead of maintaining a separate XML file of data, you define a blueprint for each table and then create as many different objects as you need in your PHP code.

`Phactory Laravel` will access the database based on your `Laravel` config, simple as that.

Be aware that you must [specify a tasting database](https://laracasts.com/discuss/channels/testing/how-to-specify-a-testing-database-in-laravel-5), otherwise `Phactory Laravel` will insert data in your development database.

## Installation

First you need to add this to your `composer.json` requires:

```json
	"talyssonoc/phactory-laravel": "dev-master"
```

Then set the `minimum-stability` of your dependencies to `dev`, adding this to your `composer.json`:

```json
	"minimum-stability": "dev"
```

Then run:

```sh
	$ composer install
```

After that you should add this to your service providers (at `config/app.php`):

```php
	'PhactoryLaravel\PhactoryServiceProvider'
```

And that to your aliases (at the same file):

```php
	'Phactory'	=> 'PhactoryLaravel\\Phactory'
```

After that, `Phactory` facade will be available for you to use.

## Creating a factory

Yours factories must be inside the folder `app/Factories`, and you should use the API provided by `Phactory`. The content of each file must be something like this:

```php
<?php

	Phactory::define('user', [
	  'name' => 'UserName :D'
	]);
```

## Laravel 5.1

Note that is is not entirely necessary with Laravel 5.1, since it has [model factories](http://laravel.com/docs/master/testing#model-factories) _out-of-box_, but you can still use `Phactory Laravel` with Laravel 5.1 if you prefer.


### To do

- [ ] Make configurable the `Factories` folder
- [ ] Add support to [Laravel MongoDB](https://github.com/jenssegers/laravel-mongodb)
