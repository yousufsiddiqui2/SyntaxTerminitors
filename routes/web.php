<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomizeController;
use App\Http\Controllers\CustomizeManageController;
use App\Http\Controllers\ContactManageController;
use App\Http\Controllers\AddTourController;
use App\Http\Controllers\TourListController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Layouts

Route::get('/layout', [LayoutController::class, 'layoutfun']);
Route::get('/dashlayout', [LayoutController::class, 'dashlayoutfun']);


//Simple Routes

Route::get('/layout', [LayoutController::class, 'layoutfun']);
Route::get('/',[IndexController::class,"indexfun"]);
Route::get('/about',[AboutController::class,"aboutfun"]);
Route::get('/contact',[ContactController::class,"contactfun"]);
Route::get('/gallery',[GalleryController::class,"galleryfun"]);
Route::get('/customize',[CustomizeController::class,"customizefun"]);

//Dashboard Routes

Route::get('/dashboard', [DashboardController::class, 'dashboardfun'])->middleware('admin');
Route::get('/cusmanage', [CustomizeManageController::class, 'cusmanagefun'])->middleware('admin');
Route::get('/addtour', [AddTourController::class, 'addtourfun'])->middleware('admin');
Route::get('/tourdetails', [AddTourController::class, 'tourdetailsfun']);
Route::get('/contactmanage',[ContactManageController::class,"contactmanagefun"])->middleware('admin');


//Delete
Route::get('/delete/{record}',[CustomizeManageController::class,'cusDelete']);
Route::get('/cdelete/{record}',[ContactManageController::class,'conDelete']);


//Isert Post Routes
Route::post('/insertcon', [ContactController::class, 'contactinsert']);
Route::post('/insertcustomize', [CustomizeController::class, 'customizeinsert']);
Route::post('/adtour', [AddTourController::class, 'adtourfun']);


//PDF print
Route::get('/print_pdf/{id}', [CustomizeManageController::class, 'print_pdf']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

