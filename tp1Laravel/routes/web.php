<?php

use App\Http\Controllers\PingPongController;
use App\Http\Controllers\Todo;
use App\Http\Controllers\TodoController;
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
    return view('welcome', ['titre' => 'Bonjour']);
});
/*
Route::get('/ping', function(){
    return view('App\Http\Controllers\PingPongController', 'ping');
});
Route::get('/pong', ['App\Http\Controllers\PingPongController', 'pong']);
*/
Route::get('/ping', [PingPongController::class, 'ping']);
Route::get('/ping', [PingPongController::class, 'ping']);
Route::get('/todo', [TodoController::class, 'todo']);
Route::get("/addTodo", [TodoController::class, "addTodo"]);
