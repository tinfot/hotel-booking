<?php

namespace HotelBooking\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \HotelBooking\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \HotelBooking\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \HotelBooking\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'guest' => \HotelBooking\Http\Middleware\RedirectIfAuthenticated::class,
        'auth.admin' => \HotelBooking\Http\Middleware\Admin\Authenticate::class,
        'admin.guest'=> \HotelBooking\Http\Middleware\Admin\RedirectIfAuthenticated::class,
        'auth.hotel' => \HotelBooking\Http\Middleware\Hotel\Authenticate::class,
        'hotel.guest' => \HotelBooking\Http\Middleware\Hotel\RedirectIfAuthenticated::class,
        'auth.user' => \HotelBooking\Http\Middleware\Frontend\Authenticate::class,
        'user.guest' => \HotelBooking\Http\Middleware\Frontend\RedirectIfAuthenticated::class,
    ];
}
