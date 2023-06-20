<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/register',[AuthController::class,'registerPost'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');

Route::get('/home',[HomeController::class, 'index']);
Route::delete('/logout',[AuthController::class,'logout'])->name('logout');


/*notes
-----------------
go to=http://localhost:8000/register

go to=http://localhost:8000/register
and reload, then, register here & check db's user table
---4
–http://localhost:8000/login
–ebar wrong info dia login kore dekbo
-ebong right info dia login kore dekbo
-http://localhost:8000/home

---5
php artisan make:controller HomeController

go to=http://localhost:8000/home

---6
–http://localhost:8000/home#
-click on logout

–logout kore nicher link a gele abar o home nia jaye, neyar kotha login a
-http://localhost:8000/home#

---7

*/

