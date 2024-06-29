<?php

use Illuminate\Support\Facades\Route;

Route::get('/clear', function () {
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('route:clear');
    \Artisan::call('config:cache');
    \Artisan::call('config:clear');
    \Artisan::call('view:cache');
    \Artisan::call('view:clear');
    return 'FINISHED';
});

Auth::routes();
Auth::routes(["register" => false]);
Route::view('/forgot-password', 'auth.forgot')->name('forgot-password');
Route::view('/reset-password', 'auth.reset')->name('reset-password');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin
Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DasboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/usuarios', [App\Http\Controllers\Admin\UserController::class, 'listUser'])->name('list.user');
    Route::get('/usuario/editar/{id}', [App\Http\Controllers\Admin\UserController::class, 'editUser'])->name('edit.user');
    Route::post('/usuario/actualizar/{id}', [App\Http\Controllers\Admin\UserController::class, 'updateUser'])->name('update.user');
    Route::get('/usuario/eliminar/{id}', [App\Http\Controllers\Admin\UserController::class, 'deleteUser'])->name('delete.user');
    Route::get('/usuario/agregar', [App\Http\Controllers\Admin\UserController::class, 'addUser'])->name('add.user');
    Route::post('/usuario/agregar-nuevo-usuario', [App\Http\Controllers\Admin\UserController::class, 'storeUser'])->name('store.user');

});
