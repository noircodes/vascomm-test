<?php

use App\Http\Livewire\ChangePassword;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Work;
use Illuminate\Support\Facades\Route;

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

Route::get('/livewire', function(){
    return view('test');
});

Route::get('/profile', Profile::class);
Route::get('/work', Work::class);
Route::get('/changepassword', ChangePassword::class);
