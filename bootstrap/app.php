<?php

use App\Console\Kernel;
use App\Exceptions\Handler;
use App\Providers\AppServiceProvider;
use App\Providers\AuthServiceProvider;
use App\Providers\EventServiceProvider;
use Illuminate\Contracts\Console\Kernel as ConsoleKernel;
use Illuminate\Contracts\Cookie\QueueingFactory;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Cookie\CookieServiceProvider;
use Illuminate\Redis\RedisServiceProvider;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Session\SessionManager;
use Illuminate\Session\SessionServiceProvider;
use Laravel\Lumen\Application;
use Laravel\Lumen\Bootstrap\LoadEnvironmentVariables;
use Urameshibr\Providers\LumenFormRequestServiceProvider;
use SocialiteProviders\Manager\ServiceProvider;

require_once __DIR__ . '/../vendor/autoload.php';

(new LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();

date_default_timezone_set(env('APP_TIMEZONE', 'Asia/Ho_Chi_Minh'));

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Here we will load the environment and create the application instance
| that serves as the central piece of this framework. We'll use this
| application as an "IoC" container and router for this framework.
|
*/

$app = new Application(
    dirname(__DIR__)
);

$app->withFacades();

$app->withEloquent();

/*
|--------------------------------------------------------------------------
| Register Container Bindings
|--------------------------------------------------------------------------
|
| Now we will register a few bindings in the service container. We will
| register the exception handler and the console kernel. You may add
| your own bindings here if you like or you can make another file.
|
*/
$app->singleton(SessionManager::class, function () use ($app) {
    return $app->loadComponent('session', SessionServiceProvider::class, 'session');
});

$app->singleton('session.store', function () use ($app) {
    return $app->loadComponent('session', SessionServiceProvider::class, 'session.store');
});

$app->singleton('cookie', function () use ($app) {
    return $app->loadComponent('session', CookieServiceProvider::class, 'cookie');
});

$app->singleton(ExceptionHandler::class, Handler::class);

$app->singleton(ConsoleKernel::class, Kernel::class);

$app->bind(QueueingFactory::class, 'cookie');

$configs = [
    'app',
    'cache',
    'database',
    'mail',
    'session',
    'view',
    'services',
];
foreach ($configs as $value) {
    $app->configure($value);
}


/*
|--------------------------------------------------------------------------
| Register Middleware
|--------------------------------------------------------------------------
|
| Next, we will register the middleware with the application. These can
| be global middleware that run before and after each request into a
| route or middleware that'll be assigned to some specific routes.
|
*/
$app->middleware([
                     StartSession::class,
                 ]);
/*
|--------------------------------------------------------------------------
| Register Service Providers
|--------------------------------------------------------------------------
|
| Here we will register all of the application's service providers which
| are used to bind services into the container. Service providers are
| totally optional, so you are not required to uncomment this line.
|
*/

$app->register(AppServiceProvider::class);
$app->register(AuthServiceProvider::class);
$app->register(EventServiceProvider::class);
$app->register(RedisServiceProvider::class);
$app->register(LumenFormRequestServiceProvider::class);
$app->register(ServiceProvider::class);

/*
|--------------------------------------------------------------------------
| Load The Application Routes
|--------------------------------------------------------------------------
|
| Next we will include the routes file so that they can all be added to
| the application. This will provide all of the URLs the application
| can respond to, as well as the controllers that may handle them.
|
*/

$app->router->group([
                        'namespace' => 'App\Http\Controllers',
                    ], function ($router) {
    require __DIR__ . '/../routes/web.php';
});

return $app;
