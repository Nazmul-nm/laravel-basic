<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/',[HomeController::class,'one']);
Route::get('/about-us',[HomeController::class,'about'])->name('about-us');
Route::get('/contacts',[HomeController::class,'contacts'])->name('contacts');
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('test/',function(){
//     return view('test',[
//         'heading' => "this is heading",
//         'sub_heading' => "Sub Heading",
//     ]);
// });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
