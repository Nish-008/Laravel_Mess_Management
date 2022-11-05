<?php
use App\Http\Controllers\management\categoryController;
use App\Http\Controllers\management\menuController;
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
Route::get('/management', function () {
    return view('management.index');
});

 
Route::get('/management/category', [categoryController::class, 'index']);

/*Route::resource('/management/menu', management\menuController::class);*/
Route::resource('/management/category/create',[createNewCategory::class,'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
