<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProjectController;
use \App\Models\Project;

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
    $projects = Project::all();
    return view('index', compact('projects'));
});

Route::get('/projects/all', [ProjectController::class, 'index']);
Route::post('/message/store', [MessageController::class, 'store'])->name('store_message');


