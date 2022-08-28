<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AUserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JobAnnouncementController;
use App\Http\Controllers\JobDescrptionController;
use App\Http\Controllers\PhotoDetailsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileAController;
use App\Http\Controllers\UserController;
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


Route::get('/', [HomeController::class,'home']);
Route::get('/AbousUs', [AboutController::class,'AbousUsUser']);

Route::get('/Gallery', [/* A controller that is used to handle the gallery routes. */
/* A controller that is used to handle the gallery routes. */
GalleryController::class,'showBanners'])->name('ge');

Route::get('/Job', [JobAnnouncementController::class,'JobView']);
Route::get('/Job-Title/{id}', [JobDescrptionController::class,'JobDe'])->name('job-application');
Route::post('/application', [JobDescrptionController::class,'app'])->name('application');

Route::get('/detail/{id}', [GalleryController::class,'detail']);
Route::get('/MDetail/{id}', [GalleryController::class,'Mdetail']);
// Route::get('/Admin', [AdminController::class,'index']);



Auth::routes();

Route::middleware(['auth:web'])->group(function(){

    
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('/con', [App\Http\Controllers\HomeController::class, 'contact'])->name('con');



Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'ProfileIndex'])->name('profile');
Route::post('/profile', [App\Http\Controllers\HomeController::class, 'update'])->name('profile.update');



Route::get('/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/store-image',[UserController::class,'storeImage'])
->name('store');

//For showing an image
Route::get('/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');




Route::get('/AbousAdmin', [AboutController::class,'AbousUsAdmin'])->name('about');
Route::post('/AbousAdminP', [AboutController::class,'AbousUsAdminP'])->name('aboutP');

Route::get('/contact', [ContactController::class,'contact']);
Route::post('/contactP', [ContactController::class,'contactP'])->name('contact');


Route::get('/contactAdmin', [ContactController::class,'showw'])->name('conad');
Route::get('/contactAdmin/{id}', [ContactController::class,'delete'])->name('delete');


Route::get('/add-banner', [GalleryController::class,'bannerPhoto'])->name('add-banner');
Route::post('/Pbanner', [GalleryController::class,'bannerPhotoP'])->name('Pbanner');
Route::get('/bannersca', [GalleryController::class,'bannersca'])->name('bannersca');
Route::get('/bannerDelete/{id}', [GalleryController::class,'bannerDelete'])->name('bannerDelete');
Route::get('/bannerEdit/{id}', [GalleryController::class,'bannerEdit'])->name('bannerEdit');


Route::get('/machineView', [GalleryController::class,'machinePhoto'])->name('machineView');
Route::post('/Pmachine', [GalleryController::class,'machinePhotoP'])->name('Pmachine');

Route::get('/jobinfo', [JobAnnouncementController::class,'jobinfo'])->name('jobinfo');
Route::post('/jobinfoP', [JobAnnouncementController::class,'jobinfoP'])->name('jobinfoP');


Route::get('/jobshow', [JobAnnouncementController::class,'jobtable'])->name('jobtable');
Route::get('/show/jobs/{id}', [JobDescrptionController::class,'ViweJobs'])->name('ShowJobs');


}
);


