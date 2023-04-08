<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProjectsController;

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

Route::fallback(function () {
    dd("error");
});

Route::get('/', function () {
    return redirect(route('login'));
});

Auth::routes([
    'register' => false,
]);

Route::group(['middleware' => 'auth'], function(){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('updateprofile', 'App\Http\Controllers\UpdateProfileController');

    Route::resource('projects', 'App\Http\Controllers\ProjectsController');

    Route::get('viewprojects/{projects}', [App\Http\Controllers\ProjectsController::class, 'viewprojects']);

    Route::resource('viewprojects', 'App\Http\Controllers\TaskController');

    Route::get('editprojects/{projects}', [App\Http\Controllers\ProjectsController::class, 'editprojects']);

    Route::resource('users', 'App\Http\Controllers\UserController');

    Route::get('edituser/{user}', [App\Http\Controllers\UserController::class, 'edituser']);

    Route::get('userregister', [App\Http\Controllers\UserController::class, 'userregister']);

    Route::resource('firstchecklist', 'App\Http\Controllers\FirstAssigneeController');

    Route::resource('secondchecklist', 'App\Http\Controllers\SecondAssigneeController');

    Route::resource('thirdchecklist', 'App\Http\Controllers\ThirdAssigneeController');

    Route::resource('qachecksave', 'App\Http\Controllers\LastQaCheckController');

    Route::resource('firstqachecklist', 'App\Http\Controllers\FirstQaCheckController');

    Route::resource('secondqachecklist', 'App\Http\Controllers\SecondQaCheckController');

    Route::resource('thirdqachecklist', 'App\Http\Controllers\ThirdQaCheckController');

});

