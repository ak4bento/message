# Message JSON Response And HTML Response (Commingsoon) Laravel 5

A minimal package for JSON Response API and HTML Response (Commingsoon) to clients, Laravel.

## Getting Started

### Install the package via composer.

Download package dengan composer
```bash
composer require akilsagitarius/message
```
or
```
{
	"require": {
		"akilsagitarius/message" : "dev-master"
	}
}
```
### Register the service provider.

This package makes use of Laravel's auto-discovery of service providers. If you are an using earlier version of Laravel (&lt; 5.4) you will need to manually register the service provider.

Add `akilsagitarius\message\MessageServiceProvider::class` to the `providers` array in `config/app.php`.

example
```php
'providers' => [
	....
	
	akilsagitarius\message\MessageServiceProvider::class,
]
```
### Register the service provider.

Now, publish the configuration code response to your provider

```php
php artisan vendor:publish --tag=public --force
```

# Usage

## Basic
**NOTE:** The response code returned in the body payload will be set as the actual HTTP header response code as well.

### Regular Responses

This is simple response

```php
Route::get('/message', function () {
    $reuslt = Message::success(200)->get();
    return $reuslt;
});
```

Will result in the following structured result:

```json
{
    code: 200,
    result: "Success",
    message: "OK"
}
```

### Secondary Responses

This is response with result your send

```php
Route::get('/mess', function () {
    $array = array(
        'first' => 'This is first data',
        'second' => 'This is second data',
    );
    $reuslt = Message::success(200)->payload($array)->get();
    return $reuslt;
});
```

Will result in the following structured result:

```json
{
    code: 200,
    result: "Informational",
    message: "OK",
    payload: {
        first: "This is first data",
        second: "This is second data"
    }
}
```
## Authors

***Muhammad Akil** - *Initial work* - [Akill](https://akilsagitarius.github.io/)

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc