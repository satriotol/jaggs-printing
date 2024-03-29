<?php

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

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/', 'IndexController@index')->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::resource('/admin/product','ProductController');
});
// Route::resource('/', IndexController::class);

