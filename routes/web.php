<?php

use Illuminate\Support\Facades\Route;
use App\Events\UserRegistration;

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

Route::get('/', function () {
    return view('welcome');


});

// Route::get('/popup', function () {
//     return view('popup');
// });

Route::get('/user-register', function () {
    return view('user-register');
})->name('user.register');


Route::post('/user-register', function () {

    //return request()->all();

    $name = request()->name;
    //event(new App\Events\UserRegistration($name));
    event(new UserRegistration($name));
    // return view('user-register');
});



