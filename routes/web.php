<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GalleryController; 
use App\Http\Controllers\OurteamController; 
use App\Http\Controllers\EnquiryController; 
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SubscribeController;  
use App\Http\Controllers\ServiceController; 
use App\Http\Controllers\LoginController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SubscribeUsController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ConsultController;
use App\Http\Controllers\FaqController;
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


Route::get('/',[FrontendController::class,'comming']);
Route::get('/home',[FrontendController::class,'home'])->name('home');
// Route::get('/blogs',[FrontendController::class,'blogs'])->name('blogs');
Route::get('/gallery',[FrontendController::class,'gallery'])->name('gallery');
Route::get('/about',[FrontendController::class,'about'])->name('about');
Route::get('/faq',[FrontendController::class,'faq'])->name('faq');
Route::get('/doctors',[FrontendController::class,'doctors'])->name('doctors');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');
Route::post('/contact_us',[ContactController::class,'store'])->name('contact_us');
Route::get('/service',[FrontendController::class,'service'])->name('service');
Route::get('/service/detail/{id}',[FrontendController::class,'service_detail'])->name('service_detail');
Route::get('/faq/detail/{id}',[FrontendController::class,'faq_detail'])->name('faq_detail');
Route::post('/subscribe',[SubscribeUsController::class,'store'])->name('subscribe');
Route::post('/consulting',[ConsultController::class,'store'])->name('cnst_Store');



// Backend routes

Route::get('/adminlogin',[LoginController::class,'page']);
Route::post('/adminlogin',[LoginController::class,'authentic']);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::group(['middleware' => ['adminpage'], 'prefix' =>'/admin'],function(){
    Route::get('/dashboard',[mainController::class,'main'])->name('dash');
   
    Route::resource('gallery',GalleryController::class);
    Route::resource('slider',SliderController::class);
    Route::post('/slider_update',[SliderController::class,'updateStatus']);
    Route::resource('banner',BannerController::class);
    Route::resource('ourteam',OurteamController::class);
    Route::resource('enquiries',EnquiryController::class);
    Route::resource('feedback',FeedbackController::class);
    Route::resource('subscribe',SubscribeController::class);
    Route::resource('service',ServiceController::class);
    Route::resource('setting',SettingController::class);
    Route::resource('about',AboutController::class);
    Route::resource('faq',FaqController::class);
    Route::get('/consulting/list',[ConsultController::class,'index'])->name('cnst_list');
    Route::get('/consulting/list/show/{id}',[ConsultController::class,'show'])->name('cnst_show');
    Route::get('/consulting/list/delete/{id}',[ConsultController::class,'delete'])->name('cnst_delete');
});