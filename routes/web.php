<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MainController;

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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});


/*Route::prefix('admin')->group(function () {

   Route::get('users', function(){return 'all';}); 

   Route::get('users/{id}', function($all){return $all;}); 

});*/

                    //админка
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'checkRole']], function () {
    Route::get('/', function () {return view('admin.index');})->name('admin.index'); 

    Route::get('/admin/index', function () {return view('admin.index');}); 

            //courses
    Route::resource('courses', CourseController::class);
    Route::post('/courses', [CourseController::class, 'store'])->name('admin.courses.store');

            //prices
    Route::resource('prices', PriceController::class);
    
});

Route::get('/', [MainController::class, 'index']);


Route::get('/post/{id}', [PostController::class, 'show']);
Route::get('/noch', [PostController::class, 'noch']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/show', [UserController::class, 'show']);

Route::get('/tasks', [TaskController::class, '']);

Route::get('/price', [PriceController::class, 'show']);

Route::get('/course', [CourseController::class, 'show']);

