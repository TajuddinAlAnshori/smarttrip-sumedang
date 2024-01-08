<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\MyBookingListController;
use App\Http\Controllers\User\PackageListController;
use App\Http\Controllers\User\ShowController;

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\BookingListController;
use App\Http\Controllers\Auth\ResetPasswordController;

use App\Http\Controllers\ChangePassController;

// use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

// Landing page route
Route::get('/', [ShowController::class, 'show'])->name('show');

// Redirect to landing page before login
Route::get('/login', function () {
    return redirect()->route('show');
})->name('login');

Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);

Auth::routes(['main']);
Route::prefix('/user')
    ->get('/', [UserDashboardController::class, 'index'])
    ->middleware(['auth', 'which.home'])
    ->name('user.dashboard');

// Landing page route
Route::get('/landingpage', [ShowController::class, 'show'])->name('show');
Route::get('/mitra', [ShowController::class, 'mitra'])->name('mitra');

Route::prefix('/')
    ->middleware(['auth', 'is.user'])
    ->group(function(){

        Route::get('/dashboard-booking-list', [UserDashboardController::class, 'dashboard_booking_list'])
        ->name('dashboard.booking-list');
        Route::get('/package/json', [PackageListController::class, 'json'])
        ->name('package-list.json');
        Route::get('/package', [PackageListController::class, 'index'])
        ->name('package-list.index');

        Route::get('/my-booking-list/json', [MyBookingListController::class, 'json'])
        ->name('my-booking-list.json');
        Route::get('/my-booking-list', [MyBookingListController::class, 'index'])
        ->name('my-booking-list.index');
        Route::get('/my-booking-list/create', [MyBookingListController::class, 'create'])
        ->name('my-booking-list.create');
        Route::post('/my-booking-list/store', [MyBookingListController::class, 'store'])
        ->name('my-booking-list.store');
        Route::put('/my-booking-list/{id}/cancel', [MyBookingListController::class, 'cancel'])
        ->name('my-booking-list.cancel');

        //display reset form
        Route::get('/reset-password', [ResetPasswordController::class, 'showResetForm']);
        //handle  pass
        Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
        ->name('password-update');


        // Route::get('/mail', function () {
        //     Mail::to('fajarwindhuzulfikar@gmail.com')
        //         ->send(new \App\Mail\BookingMail('Booking Ruangan 3', 'Admin'));
        //     return 'Terkirim';
        // });
    });

Route::prefix('admin')
    ->middleware(['auth', 'is.admin'])
    ->group(function(){
        Route::get('/', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');

            Route::get('/user/json', [UserController::class, 'json'])
            ->name('user.json');

            Route::get('/user/{id}/change-pass', [UserController::class, 'change_pass'])
            ->name('user.change-pass');

            Route::put('/user/{id}/update-pass', [UserController::class, 'updatePass'])
            ->name('admin.user.update-pass');

            Route::put('/user/{id}/update', [UserController::class, 'update-pass'])
            ->name('user.update-pass');

        Route::get('/package/json', [PackageController::class, 'json'])
        ->name('package.json');

        Route::get('/booking-list/json', [BookingListController::class, 'json'])
        ->name('booking-list.json');

        Route::get('/booking-list', [BookingListController::class, 'index'])
        ->name('booking-list.index');

        Route::put('/booking-list/{id}/update/{value}', [BookingListController::class, 'update'])
        ->name('booking-list.update');

        Route::resources([
            'user'          => UserController::class,
            'package'          => PackageController::class,
        ]);
    });

/* 
| So basically we have 2 users here, USER and ADMIN. USER prefix is '/'
| and ADMIN prefix is 'admin'. Here we have change password feature that 
| can be used by either USER nor ADMIN.
*/

$users = [
    '/', 'admin',
];

foreach ($users as $user) {
    Route::prefix($user)
    ->middleware(['auth'])
    ->group(function () use ($user) {
        if($user == '/') $user = 'user';
        Route::get('/change-pass', [ChangePassController::class, 'index'])
        ->name($user.'.change-pass.index');
        Route::put('/change-pass/update', [ChangePassController::class, 'update'])
        ->name($user.'.change-pass.update');
    });
}

// routes/web.php



