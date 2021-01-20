<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WorkExperienceController;
use App\Http\Controllers\EducationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get/projects', [ProjectController::class, 'getAllProjects'])->name('get_projects');
Route::get('/get/project/languages', [ProjectController::class, 'getAllProjectLanguages'])->name('get_project_languages');


Route::get('/get/workexperiences', [WorkExperienceController::class, 'getAllWorkExperiences'])->name('get_work_experiences');



Route::get('/get/educations', [EducationController::class, 'getAllEducations'])->name('get_educations');
