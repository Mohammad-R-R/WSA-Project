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
use App\Http\Controllers\TheHomeController;
use App\Http\Controllers\SlideshowController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\FooterController;







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

/**user routes */

Route::get('/', [SlideshowController::class,'show'])->name('slideshowShow');
Route::get('/AbousUs', [AboutController::class,'AbousUsUser']);
Route::get('/Gallery', [GalleryController::class,'showBanners'])->name('ge');
Route::get('/Job', [JobAnnouncementController::class,'JobView']);
Route::get('/Job-Title/{id}', [JobDescrptionController::class,'JobDe'])->name('job-application');
Route::post('/application', [JobDescrptionController::class,'app'])->name('application');
Route::get('/detail/{id}', [GalleryController::class,'detail']);
Route::get('/MDetail/{id}', [GalleryController::class,'Mdetail']);
Route::get('/con', [App\Http\Controllers\HomeController::class, 'contact'])->name('con');
Route::get('/contact', [ContactController::class,'contact'])->name('Contactt');
Route::post('/contactP', [ContactController::class,'contactP'])->name('contact');
Route::get('/showLogo', [LogoController::class,'showLogo'])->name('showLogo');
/**end user routes */

Auth::routes(['register' => false]);



Route::middleware(['auth:web'])->group(function(){

    
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');




Route::get('/admin/profile', [App\Http\Controllers\HomeController::class, 'ProfileIndex'])->name('profile');
Route::post('/admin/profile', [App\Http\Controllers\HomeController::class, 'update'])->name('profile.update');



Route::get('/admin/add-image',[ImageUploadController::class,'addImage'])->name('images.add');

//For storing an image
Route::post('/admin/store-image',[UserController::class,'storeImage'])
->name('store');

//For showing an image
Route::get('/admin/view-image',[ImageUploadController::class,'viewImage'])->name('images.view');


/**about us  */

Route::get('/admin/AbousAdmin', [AboutController::class,'AbousUsAdmin'])->name('about');
Route::post('/admin/AbousAdminP', [AboutController::class,'AbousUsAdminP'])->name('aboutP');
/** end about us  */


/**contact  */
Route::get('/admin/contactAdmin', [ContactController::class,'showw'])->name('conad');
Route::get('/admin/contactAdmin/{id}', [ContactController::class,'delete'])->name('delete');
/**end contact */



/** banners  */
Route::get('/admin/add-banner', [GalleryController::class,'bannerPhoto'])->name('add-banner');
Route::post('/admin/Pbanner', [GalleryController::class,'bannerPhotoP'])->name('Pbanner');
Route::get('/admin/bannersca', [GalleryController::class,'bannersca'])->name('bannersca');
Route::get('/admin/bannerDelete/{id}', [GalleryController::class,'bannerDelete'])->name('bannerDelete');
Route::get('/admin/editbanner/{id}', [GalleryController::class,'bannerEdit'])->name('editbanner');
Route::post('/admin/editbannerP', [GalleryController::class,'bannerEditP'])->name('editbannerP');
/**end banners  */


/**machine  */
Route::get('/admin/machineView', [GalleryController::class,'machinePhoto'])->name('machineView');
Route::post('/admin/Pmachine', [GalleryController::class,'machinePhotoP'])->name('Pmachine');
Route::get('/admin/machinesca', [GalleryController::class,'machinesca'])->name('machinesca');
Route::get('/admin/machineDelete/{id}', [GalleryController::class,'machineDelete'])->name('machineDelete');
Route::get('/admin/editmachine/{id}', [GalleryController::class,'machineEdit'])->name('editmachine');
Route::post('/admin/editmachineP', [GalleryController::class,'machineEditP'])->name('editmachineP');
/**end machine */

/**jobs */
Route::get('/admin/jobinfo', [JobAnnouncementController::class,'jobinfo'])->name('jobinfo');
Route::post('/admin/jobinfoP', [JobAnnouncementController::class,'jobinfoP'])->name('jobinfoP');
Route::get('/admin/jobshow', [JobAnnouncementController::class,'jobtable'])->name('jobtable');
Route::get('/admin/show/jobs/{id}', [JobDescrptionController::class,'ViweJobs'])->name('ShowJobs');
Route::get('/admin/delete/jobs/{id}', [JobDescrptionController::class,'deleteJobs'])->name('deleteJobs');

/**end jobs */




Route::get('/admin/HOME', [TheHomeController::class,'Home'])->name('The-Home');
Route::post('/admin/HOMEp', [TheHomeController::class,'createHome'])->name('creatHome');

/*slide show  */
Route::get('/admin/slideshow', [SlideshowController::class,'index'])->name('slideshow');
Route::post('/admin/slideshowP', [SlideshowController::class,'slideshowP'])->name('slideshowP');

Route::get('/admin/slideshowtable', [SlideshowController::class,'slideshowtable'])->name('slideshowtable');
Route::get('/admin/slideshowtableD/{id}', [SlideshowController::class,'delete'])->name('slideshowtableD');
/** end slide show */

/** Home  */

Route::get('/admin/Htitle', [TitleController::class,'Htitle'])->name('Htitle');
Route::post('/admin/HtitleP', [TitleController::class,'HtitleP'])->name('HtitleP');


Route::get('/admin/prom', [PromotionController::class,'index'])->name('prom');
Route::post('/admin/promP', [PromotionController::class,'promP'])->name('promP');
/**end Home */


/**settings  */

Route::get('/admin/logo', [LogoController::class,'logo'])->name('logo');
Route::post('/admin/logoP', [LogoController::class,'logoP'])->name('logoP');


Route::get('/admin/meta', [MetaController::class,'meta'])->name('meta');
Route::post('/admin/metaP', [MetaController::class,'metaP'])->name('metaP');


Route::get('/admin/footer', [FooterController::class,'home'])->name('footer');
Route::post('/admin/footerP', [FooterController::class,'footerP'])->name('footerP');
/**end settings  */







}
);


