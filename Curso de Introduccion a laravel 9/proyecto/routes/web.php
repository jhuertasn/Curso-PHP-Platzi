<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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

/**
 * Route::get Consultar
 * Route::post Guardar
 * Route::delete Eliminar
 * Route::put Actualizar
 */

Route::controller(PageController::class)->group(function(){
    Route::get('/',          'home')->name('home');
    //Route::get('blog',       'blog')->name('blog');
    Route::get('blog/{post:slug}','post')->name('post');
});


Route::redirect('dashboard','posts')->name('dashboard');

Route::resource('posts',PostController::class)->middleware(['auth'])->except(['show']);

require __DIR__.'/auth.php';
