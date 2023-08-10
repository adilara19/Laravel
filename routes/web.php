<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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


/*

Bir route tanımladıktan sonra,
get ve post ile hangi işlemi yapmak istediğimizi seçmemiz gerekiyor. Biz bu örnekte get işlemlerini yapacağız.
retrun 'Merhaba Laravel' tarayıcıyı açtığımız zaman ekranda gösterilecek olan yazıyı simgeliyor.

Route::get('/', function(){
    return 'Merhaba Laravel'; 
});
*/


Route::resource('users', UsersController::class); 