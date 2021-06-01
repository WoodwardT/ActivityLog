<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\ActivityController@index');
//Route::get('/dashboard', 'App\Http\Controllers\ActivityController@index');
//The above like is commented out because auth/authenticatesessioncontoller.php file was updated at line 35 to go to index page


// Route::resource('posts', PostController::class);
Route::resource('activities', activityController::class)->only(['index','show','create']);
Route::resource('activities', activityController::class)->only(['store','edit','update','destroy'])->middleware('auth');


Route::resource('details', detailController::class)->only(['index','show','create']);
Route::resource('details', detailController::class)->only(['store','edit','update','destroy','showmap'])->middleware('auth');


//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
