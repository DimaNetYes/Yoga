<?php

use App\Http\Controllers\Admin\AdminPriceController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CookieController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PriceController;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImpressumController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\SystemCalendarController;
//use App\Http\Controllers\Admin\EventsController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'NoRule'])->name('home');




/*Route::prefix('admin')->group(function () {

   Route::get('users', function(){return 'all';}); 

   Route::get('users/{id}', function($all){return $all;}); 

});*/
                         //ERORS
Route::fallback(function(){return view('errors.404');});  //Этот маршрут срабатывает, если другого не найдено

                    //админка
Route::group(['prefix' => 'admin', 'as' => 'admin.',  'middleware' => ['auth', 'checkRole']], function () {
     
        Route::get('/', [HomeController::class, 'index'])->name('home');  

                        //MAIN
        Route::get('/main', function () {return view('admin.index');})->name('index');   

                //CALENDAR
    Route::get('system-calendar', [SystemCalendarController::class, 'index'])->name('systemCalendar');

     // Events
     Route::delete('events/destroy', [EventsController::class, 'massDestroy' ])->name('events.massDestroy');
    Route::resource('events', EventsController::class);

    Route::get('/admin/index', function () {return view('admin.index');}); 

            //courses
    Route::resource('courses', CourseController::class);
    Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');

            //prices
    Route::resource('prices', AdminPriceController::class);
   
   

                //NEWS
    Route::resource('news', NewsController::class);
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    
});

Route::get('/', [MainController::class, 'index'])->name("base");


Route::get('/post/{id}', [PostController::class, 'show']);
Route::get('/noch', [PostController::class, 'noch']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/show', [UserController::class, 'show']);

Route::get('/tasks', [TaskController::class, '']);

Route::get('/price', [PriceController::class, 'show']);

Route::get('/course', [CourseController::class, 'show']);


                  //MAP MAP MAP
Route::get('/map', [MapController::class, 'showMap']);
                //SLICK
Route::get('/slick', function () {return view('slick');});
                //WIDGET
Route::get('/widget', function() {return view('test/widget');} );

                // Calendar
//Route::get('/calendar', [SystemCalendarController::class, 'index'])->name('Systemcalendar.show');

                //CALENDAR FOR USERS
Route::get('calendar', [SystemCalendarController::class, 'show'])->name('calendar');

                //PRICES
Route::get('price', [PriceController::class, 'show'])->name('price');
               
Route::post('/set-cookie', [CookieController::class,'setCookie']);
                
                //INFOS
Route::get('/impressum', [ImpressumController::class, 'show'])->name('impressum');
Route::get('/info', [InfoController::class, 'show'])->name('info');

                //Richtungen
Route::get('ersteschritte', function() {
    $title = 'Erste Schritte im Yoga'; 
    return view('richtungen.ersteSchritte')->with('title', $title);
})->name('ersteschritte');

Route::get('yoganastik', function() {
    $title = 'Yoganastik'; 
    return view('richtungen.yogaNastik')->with('title', $title);
})->name('yogaNastik');

Route::get('faszinastik', function() {
    $title = 'Faszinastik'; 
    return view('richtungen.fasziNastik')->with('title', $title);
})->name('fasziNastik');
