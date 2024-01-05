<?php

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
Route::get('/request', function(\Illuminate\Http\Request $request){
    $r = $request->input('email');
        dd($r);
        return 'x';

});

Route::get('user/{user?}', [\App\Http\Controllers\UserController::class, 'show']
)->name('user.show');
Route::get('users/', [\App\Http\Controllers\UserController::class, 'index']
)->name('user.index');

Route::get('/', function () {
    return view('welcome');
}); 
