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

Route::get('user/{user:name}', function(\App\Models\User $user){
    dd($user);
    return $user;
});

Route::prefix('usuarios')->group(function(){
    Route::get('', function(){
        return 'Usuario';
    })->name('usuarios');
    Route::get('/{id}', function(){
        return 'Mostrar Detalhes';
    })->name('usuarios.show');
    Route::get('/{id}/tags', function(){
        return 'Tags do Usuário';
    })->name('usuarios.tags');


});

Route::get('/a-empresa/{string?}', function ($string = null) {
    return $string;
})->name('a-empresa');

Route::get('/users/{paramA}/{paramB}', function ($pa, $pb) {
    return $pa . '-' . $pb;
}); 
