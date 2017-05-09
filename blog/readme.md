# lumen-versions
> https://packagist.org/packages/thinkeloquent/lumen-versions

### index.php Usage

```php
$_SERVER['REQUEST_URI'] = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$_GET['LUMEN_APP_DEBUG'] = isset($_GET['LUMEN_APP_DEBUG']) ? $_GET['LUMEN_APP_DEBUG'] : false;

if($_GET['LUMEN_APP_DEBUG']) {
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
}

// This file allows us to emulate Apache's "mod_rewrite" functionality
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

if ($uri !== '/' && file_exists(__DIR__.'/'.$uri)) {
    return false;
}
```

```php
// Setup Composer Packages
require_once __DIR__.'/vendor/autoload.php';

try {
    (new Dotenv\Dotenv(__DIR__))->load();
} catch (Dotenv\Exception\InvalidPathException $e) { /* fail silently */ }
```

```php
// Launch Application
$app = new Laravel\Lumen\Application(
    realpath(__DIR__.'/lumen/')
);
```

```php
//active Facades feature
$app->withFacades();
```

```php
// active Eloquent feature
$app->withEloquent();
```

```php
// Register Container Bindings
$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);
$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);
```

```php
// Active or Register Middleware
$app->routeMiddleware([
	'auth' => {name space}::class,
]);
```

```php
// Active or Register Service Providers
$app->register({name_space}::class);
```

```php
// Load The Application Routes
$app->group(['namespace' => 'App\Http\Controllers'], function ($app) {
    require __DIR__.'/routes.php';
});
```

```php
// Run The Application
$app->run();
```

## License

(The MIT License)

Copyright (c) 2014 Think Eloquent &lt;opensource@thinkeloquent.com&gt;

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

##### This file was generated on February 2015.

