<!-- <p align="center"><img src="https://laravel.cm/img/brand/laravel-notifer.svg"></p>

<p align="center">
<a href="https://travis-ci.org/chifoidriss/laravel-notifer"><img src="https://img.shields.io/travis/chifoidriss/laravel-notifer/master.svg?style=flat-square" alt="Build Status"></a>
<a href="https://packagist.org/packages/chifoidriss/laravel-notifer"><img src="https://poser.pugx.org/chifoidriss/laravel-notifer/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/chifoidriss/laravel-notifer"><img src="https://poser.pugx.org/chifoidriss/laravel-notifer/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/chifoidriss/laravel-notifer"><img src="https://poser.pugx.org/chifoidriss/laravel-notifer/license.svg" alt="License"></a>
</p> -->

## Introduction

Laravel Notifer is a package that lets you add custom notifications to your project. 
A diverse range of notification design is available.

<p align="center">
    <img src="https://i.imgur.com/mZVVn3L.png">
</p>

## Android Version

If you need Android version please try this package [Aesthetic Dialogs](https://github.com/gabriel-TheCode/AestheticDialogs). Happy Coding 👨🏾‍💻

## Installation 

You can install the package using composer

```sh
$ composer require chifoidriss/laravel-notifer
```

Then add the service provider to `config/app.php`. In Laravel versions 5.5 and beyond, this step can be skipped if package auto-discovery is enabled.

```php
'providers' => [
    ...
    Chifoidriss\Notifer\LaravelNotiferServiceProvider::class
    ...
];
```

You can publish the configuration file and assets by running:
 
```sh
$ php artisan vendor:publish --provider="Chifoidriss\Notifer\LaravelNotiferServiceProvider"
```

Now that we have published a few new files to our application we need to reload them with the following command:

```sh
$ composer dump-autoload
```

## Usage 

1. Add styles links with `@notiferCss`
2. Add scripts links with `@notiferJs`
3. use `notifer()` helper function inside your controller to set a toast notification for info, success, warning or error
4. Include notifer partial to your master layout `@include('notifer::messages')`

If you are on Laravel 7 or greater, you can use the tag syntax.

```html
<x:notifer-messages />
```

### Basic

Within your controllers, before you perform a redirect call the `notifer` method with a message.

```php
public function store()
{
    notifer()->success('Laravel Notifer is awesome!');

    // or
    notifer()->error('Laravel Notifer is awesome!');

    // or
    notifer()->warning('Laravel Notifer is awesome!');

    // or
    notifer()->info('Laravel Notifer is awesome!');

    return Redirect::home();
}
```

An complete example:

```blade
<!doctype html>
<html>
    <head>
        <title>Laravel Notifer</title>
        @notiferCss
    </head>
    <body>
        
        
        @include('notifer::notifer')
        // Laravel 7 or greater
        <x:notifer-messages />
        @notiferJs
    </body>
</html>
```

### Type of notifications
 
Laravel Notifer actually display 5 types of notifications

1. `toast` notification, (The default notification for Laravel Notifer)

```php
notifer()->success('Welcome to Laravel Notifer ⚡️') or notifer()->success('Welcome to Laravel Notifer ⚡️', 'My custom title')
```
 
2. `connectifer` notification, example of basic usage

```php
connectifer('success', 'Connection Found', 'Success Message Here')
```

3. `drakifer` (😎) notification, displays an alert only

```php
drakifer('success') // for success alert 
or
drakifer('error') // for error alert 
```

4. `smilifer` notification, displays a simple custom toast notification using the smiley (😊) emoticon

```php
smilifer('success', 'You are successfully reconnected')
```

5. `emotifer` notification, displays a simple custom toast notification using a vector emoticon

```php
emotifer('success', 'You are awesome, your data was successfully created')
```

#### Preset Notifications

If you have a specific notification that is used across multiple different places in your system, you can define it
as a preset notification in your config file. This makes it easier to maintain commonly used notifications in one place. 
Read how to define preset messages in the [Config](#config) section below.

As an example, to use a preset notification you have defined called 'common-notification', use the following:

```php
notifer()->preset('common-notification')
``` 

You can override any of the values that are set in the config if you need to. For example, this could be useful if you 
have a common notification across, but you want to change the icon in one particular place that it's used without having
to manually write out a new notification.

To do this, simply pass in an array that has the key of the attribute that you want to override and the value you want
to override it with.

As an example, we could override the 'title' of our 'common-notification' by using the following:

```php
notifer()->preset('common-notification', ['title' => 'This is the overridden title'])
```

## Config

Config file are located at `config/notifer.php` after publishing provider element.

Some awesome stuff. To active `dark mode` update the `theme` config, or add global variable `NOTIFer_THEME` on your .env file

```php
'theme' => env('NOTIFER_THEME', 'dark'),
```

You can define preset notifications in the config file using the following structure:

```php
'preset-messages' => [
    'user-updated' => [
        'message' => 'The user has been updated successfully.',
        'type'    => 'success',
        'model'   => 'connect',
        'title'   => 'User Updated',
    ],
    'user-deleted' => [
        'message' => 'The user has been deleted successfully.',
        'type'    => 'success',
        'model'   => 'connect',
        'title'   => 'User Deleted',
    ],
],
```

The example above shows the config for two preset notifications: 'user-updated' and 'user-deleted'.

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [Idriss CHIFO][link-author]
- [All Contributors][link-contributors]

## Donate :heart:

If you use and enjoy Laravel Notifer you can encourage the author by

* [Donating today](https://www.paypal.com/paypalme/jvquilichini?locale.x=fr_FR)!.
* Star the project :star:.

### Donors list:

1. **[Charlie J](https://github.com/Chazza)** - (10,00 $ USD) - `Donation made with love by Charlie from United Kingdom` - 9 October 2020

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/chifoidriss/laravel-notifer.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/chifoidriss/laravel-notifer.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/chifoidriss/laravel-notifer/master.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/chifoidriss/laravel-notifer
[link-downloads]: https://packagist.org/packages/chifoidriss/laravel-notifer
[link-travis]: https://travis-ci.org/chifoidriss/laravel-notifer
[link-author]: https://chifo.homedeve.com
