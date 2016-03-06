# Simple API Security for Laravel
[![Total Downloads](https://poser.pugx.org/simpleapisecurity/laravel/d/total.svg)](https://packagist.org/packages/simpleapisecurity/laravel)
[![Latest Stable Version](https://poser.pugx.org/simpleapisecurity/laravel/v/stable.svg)](https://packagist.org/packages/simpleapisecurity/laravel)
[![Latest Unstable Version](https://poser.pugx.org/simpleapisecurity/laravel/v/unstable.svg)](https://packagist.org/packages/simpleapisecurity/laravel)
[![License](https://poser.pugx.org/simpleapisecurity/laravel/license.svg)](https://packagist.org/packages/simpleapisecurity/laravel)
[![Gitter](https://badges.gitter.im/simpleapisecurity/laravel.svg)](https://gitter.im/simpleapisecurity/laravel)

This library is meant to be a fairly expansive encryption replacement to Laravel's built in methods. The goals is that by default it will replace the encryption and the hashing mechanisms of Laravel with compatible methods powered by Simple API Security.

## How to Install
First thing you need to do is install the components you want to replace in Laravel in your `app.cfg` file from your config directory.

### Simple API Security Encrypter Install
In `app.cfg` replace `Illuminate\Encryption\EncryptionServiceProvider::class` with `SimpleAPISecurity\Laravel\Providers\EncryptionProvider::class`.

### Simple API Security Hasher Install
In `app.cfg` replace `Illuminate\Hashing\HashServiceProvider::class` with `SimpleAPISecurity\Laravel\Providers\HashProvider::class`.
