<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\MainAdminController;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\UserprofileController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Backend\MenuDetailsController;
use App\Http\Controllers\Backend\CategoryDetailsController;
use App\Http\Controllers\Backend\GalleryDetailsController;

use App\Http\Controllers\Frantend\HomeController;
use App\Http\Controllers\Frantend\ServicesController;
use App\Http\Controllers\PDFController;

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

/*Route::get('/',function(){
     return redirect('/home');
    });*/


    
Route::get('/',[HomeController::class,'Home']);

Route::post('/contact_store',[HomeController::class,'contactAppoinment'])->name('home.contact_store');
Route::get('/apply-loan',[HomeController::class,'Applyloon'])->name('home.applyloan');
Route::get('/check-status',[HomeController::class,'Checkstatus'])->name('home.checkstatus');
Route::post('/check-mobile',[HomeController::class,'CheckMobile'])->name('home.mobile');
Route::get('/submit-status/{mob}',[HomeController::class,'SubmitStatus'])->name('home.submitstatus');
Route::get('/pdf-status/{mob}',[HomeController::class,'SubmitPDF'])->name('home.submitpdf');///{mob_id}
Route::get('/contact-us',[HomeController::class,'ContactUs'])->name('home.contact');
Route::get('/repayment',[HomeController::class,'Repayment'])->name('home.repayment');
Route::get('/service',[ServicesController::class,'Index'])->name('service.service_list');
//Route::get('/customerpdf',[ServicesController::class,'CustomerPDF'])->name('service.customer_pdf');


Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'StudentRegister'])->name('studentregister');
Route::get('/login',[AuthController::class,'loadLogin'])->name('login');
Route::post('/login',[AuthController::class,'Userlogin'])->name('userlogin');
Route::get('/logout',[AuthController::class,'logout']);
Route::get('/forget-password',[AuthController::class,'forgetPasswordStudent']);
Route::post('/forget-password',[AuthController::class,'forgetPassword'])->name('forgetpassword');
Route::get('/reset-password',[AuthController::class,'resetPasswordLoad']);
Route::post('/reset-password',[AuthController::class,'resetPassword'])->name('resetPassword');




// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','checkAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
    Route::get('/logout',[AdminController::class,'destroy'])->name('admin.logout');

    Route::post('/password/update',[MainAdminController::class,'AdminPasswordUpdate'])->name('admin.password.update');
    Route::get('/password/view',[MainAdminController::class,'AdminPassword'])->name('admin.profile.view');
    Route::post('/profile/store',[MainAdminController::class,'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/profile/edit',[MainAdminController::class,'AdminProfileEdit'])->name('admin.profile.edit');
    Route::get('/profile',[MainAdminController::class,'AdminProfile'])->name('admin.profile');
   
    Route::get('/userprofile',[UserprofileController::class,'Userprofile_list'])->name('userprofile.userprofile_list');   
    Route::get('/userprofile_add',[UserprofileController::class,'UserprofileCreate'])->name('userprofile.userprofile_add');
    Route::post('/userprofile_store',[UserprofileController::class,'UserprofileStore'])->name('userprofile.userprofile_store');
    Route::get('/userprofile_edit/{id}',[UserprofileController::class,'UserprofileEdit'])->name('userprofile.userprofile_edit');
    Route::post('/userprofile_update/{id}',[UserprofileController::class,'UserprofileUpdate'])->name('userprofile.userprofile_update');
    Route::get('/userprofile_delete/{id}',[UserprofileController::class,'UserprofileDelete'])->name('userprofile.userprofile_delete');
    Route::get('/userprofile_active/{id}',[UserprofileController::class,'UserprofileActive'])->name('userprofile.userprofile_active');
    Route::get('/userprofile_inactive/{id}',[UserprofileController::class,'UserprofileInactive'])->name('userprofile.userprofile_inactive');
     

    Route::get('/category',[CategoryController::class,'Index'])->name('category.category');
    Route::post('/categoryReload',[CategoryController::class,'CategoryReload'])->name('category.categoryReload');
    Route::post('/categorystatusUpdate',[CategoryController::class,'CategorystatusUpdate'])->name('category.categorystatusUpdate');
    Route::post('/categorydelete',[CategoryController::class,'CategoryDelete'])->name('category.categorydelete');    
    Route::post('/categorystore',[CategoryController::class,'CategoryStore'])->name('category.category_store');
    Route::get('/categoryedit/{id}',[CategoryController::class,'CategoryEdit'])->name('category.category_edit');
    Route::post('/categoryupdate',[CategoryController::class,'CategoryUpdate'])->name('category.category_update');
   

    Route::get('/category_details/{id}',[CategoryDetailsController::class,'CategoryDetailsList'])->name('category_details.category_details_view_list');
    Route::get('/category_details_add/{id}',[CategoryDetailsController::class,'CategoryDetailsCreate'])->name('category_details.category_details_add');
    Route::post('/category_details_store/{id}',[CategoryDetailsController::class,'CategoryDetailsStore'])->name('category_details.category_details_store');
    Route::get('/category_details_delete/{id}',[CategoryDetailsController::class,'CategoryDetailsDelete'])->name('category_details.category_details_delete');
    Route::get('/category_details_active/{category_id}/{id}',[CategoryDetailsController::class,'CategoryDetailsActive'])->name('category_details.category_details_active');
    Route::get('/category_details_inactive/{category_id}/{id}',[CategoryDetailsController::class,'CategoryDetailsInactive'])->name('category_details.category_details_inactive');
    Route::get('/category_details_edit/{category_id}/{id}',[CategoryDetailsController::class,'CategoryDetailsEdit'])->name('category_details.category_details_edit');
    Route::post('/category_details_update/{category_id}/{id}',[CategoryDetailsController::class,'CategoryDetailsUpdate'])->name('category_details.category_details_update');


    
    Route::get('/menu',[MenuController::class,'Index'])->name('menu.menu_view_list');
    Route::post('/menuReload',[MenuController::class,'MenuReload'])->name('menu.menuReload');
    Route::post('/activeInactivestatusUpdate',[MenuController::class,'activeInactivestatusUpdate'])->name('menu.activeInactivestatusUpdate');
    Route::post('/ajax_delete',[MenuController::class,'ajaxDelete'])->name('menu.ajax_delete');    
    Route::post('/menu_store',[MenuController::class,'MenuStore'])->name('menu.menu_store');
    Route::get('/menu_edit/{id}',[MenuController::class,'MenuEdit'])->name('menu.menu_edit');
    Route::post('/menu_update',[MenuController::class,'MenuUpdate'])->name('menu.menu_update');
   
    Route::get('/menu_details/{id}',[MenuDetailsController::class,'MenudetailsList'])->name('menu_details.menu_details_view_list');
    Route::get('/menu_details_add/{id}',[MenuDetailsController::class,'MenudetailsCreate'])->name('menu_details.menu_details_add');
    Route::post('/menu_details_store/{id}',[MenuDetailsController::class,'MenudetailsStore'])->name('menu_details.menu_details_store');
    Route::get('/menu_details_delete/{id}',[MenuDetailsController::class,'MenudetailsDelete'])->name('menu_details.menu_details_delete');
    Route::get('/menu_details_active/{menu_id}/{id}',[MenuDetailsController::class,'MenudetailsActive'])->name('menu_details.menu_details_active');
    Route::get('/menu_details_inactive/{menu_id}/{id}',[MenuDetailsController::class,'MenudetailsInactive'])->name('menu_details.menu_details_inactive');
    Route::get('/menu_details_edit/{menu_id}/{id}',[MenuDetailsController::class,'MenudetailsEdit'])->name('menu_details.menu_details_edit');
    Route::post('/menu_details_update/{menu_id}/{id}',[MenuDetailsController::class,'MenudetailsUpdate'])->name('menu_details.menu_details_update');



    Route::get('/banner',[BannerController::class,'Index'])->name('banner.banner_view_list');
    Route::post('/bannerReload',[BannerController::class,'BannerReload'])->name('banner.bannerReload');
    Route::post('/bannerstatusUpdate',[BannerController::class,'BannerstatusUpdate'])->name('banner.bannerstatusUpdate');
    Route::post('/banner_delete',[BannerController::class,'BannerDelete'])->name('banner.bannerdelete');    
    Route::post('/banner_store',[BannerController::class,'BannerStore'])->name('banner.banner_store');
    Route::get('/banner_edit/{id}',[BannerController::class,'BannerEdit'])->name('banner.banner_edit');
    Route::post('/banner_update',[BannerController::class,'BannerUpdate'])->name('banner.banner_update');
   
    Route::get('/gallery',[GalleryController::class,'Index'])->name('gallery.gallery_view_list');
    Route::post('/galleryReload',[GalleryController::class,'GalleryReload'])->name('gallery.galleryReload');
    Route::post('/gallerystatusUpdate',[GalleryController::class,'GallerystatusUpdate'])->name('gallery.gallerystatusUpdate');
    Route::post('/gallery_delete',[GalleryController::class,'GalleryDelete'])->name('gallery.gallerydelete');    
    Route::post('/gallery_store',[GalleryController::class,'GalleryStore'])->name('gallery.gallery_store');
    Route::get('/gallery_edit/{id}',[GalleryController::class,'GalleryEdit'])->name('gallery.gallery_edit');
    Route::post('/gallery_update',[GalleryController::class,'GalleryUpdate'])->name('gallery.gallery_update');
   

    Route::get('/gallery_details/{id}',[GalleryDetailsController::class,'GalleryDetailsList'])->name('gallery_details.gallery_details_view_list');
    Route::get('/gallery_details_add/{id}',[GalleryDetailsController::class,'GalleryDetailsCreate'])->name('gallery_details.gallery_details_add');
    Route::post('/gallery_details_store/{id}',[GalleryDetailsController::class,'GalleryDetailsStore'])->name('gallery_details.gallery_details_store');
    Route::get('/gallery_details_delete/{id}',[GalleryDetailsController::class,'GalleryDetailsDelete'])->name('gallery_details.gallery_details_delete');
    Route::get('/gallery_details_active/{gallery_id}/{id}',[GalleryDetailsController::class,'GalleryDetailsActive'])->name('gallery_details.gallery_details_active');
    Route::get('/gallery_details_inactive/{gallery_id}/{id}',[GalleryDetailsController::class,'GalleryDetailsInactive'])->name('gallery_details.gallery_details_inactive');
    Route::get('/gallery_details_edit/{gallery_id}/{id}',[GalleryDetailsController::class,'GalleryDetailsEdit'])->name('gallery_details.gallery_details_edit');
    Route::post('/gallery_details_update/{gallery_id}/{id}',[GalleryDetailsController::class,'GalleryDetailsUpdate'])->name('gallery_details.gallery_details_update');


    Route::get('/testimonial',[TestimonialController::class,'Index'])->name('testimonials.testimonials_view_list');
    Route::post('/testimonialReload',[TestimonialController::class,'TestimonialReload'])->name('testimonials.testimonialsReload');
    Route::post('/testimonialstatusUpdate',[TestimonialController::class,'TestimonialstatusUpdate'])->name('testimonials.testimonialsstatusUpdate');
    Route::post('/testimonial_delete',[TestimonialController::class,'TestimonialDelete'])->name('testimonials.testimonialsdelete');    
    Route::post('/testimonial_store',[TestimonialController::class,'TestimonialStore'])->name('testimonials.testimonials_store');
    Route::get('/testimonial_edit/{id}',[TestimonialController::class,'TestimonialEdit'])->name('testimonials.testimonials_edit');
    Route::post('/testimonial_update',[TestimonialController::class,'TestimonialUpdate'])->name('testimonials.testimonials_update');
   

    Route::get('/news',[NewsController::class,'Index'])->name('news.news_view_list');   
    Route::get('/news_add',[NewsController::class,'NewsCreate'])->name('news.news_add');
    Route::post('/news_store',[NewsController::class,'NewsStore'])->name('news.news_store');
    Route::get('/news_edit/{id}',[NewsController::class,'NewsEdit'])->name('news.news_edit');
    Route::post('/news_update/{id}',[NewsController::class,'NewsUpdate'])->name('news.news_update');
    Route::get('/news_delete/{id}',[NewsController::class,'NewsDelete'])->name('news.news_delete');
    Route::get('/news_active/{id}',[NewsController::class,'NewsActive'])->name('news.news_active');
    Route::get('/news_inactive/{id}',[NewsController::class,'NewsInactive'])->name('news.news_inactive');
      
    Route::get('/contact',[ContactController::class,'Index'])->name('contact.contact_view_list');
    Route::post('/assign_user',[ContactController::class,'AssignUser'])->name('contact.assign');    
    Route::post('/feedback',[ContactController::class,'FeedbackUser'])->name('contact.feedback');
    Route::get('/customer_state_wise',[ContactController::class,'Customer_statewise'])->name('contact.customer_state_wise');
    Route::get('/sendTestEmail',[ContactController::class,'sendTestEmail'])->name('contact.sendTestEmail');  //178


    Route::get('/customer_payment',[ContactController::class,'Customerpayment'])->name('contact.customer_payment');
    Route::get('/customer_pdf',[ContactController::class,'CustomerPDF'])->name('contact.customer_pdf');
    Route::get('/health_pdf',[ContactController::class,'CustomerHelth_PDF'])->name('contact.health_pdf');

    Route::post('/processing',[ContactController::class,'Processinguser'])->name('contact.processing');
    Route::post('/insorence',[ContactController::class,'Insorenceuser'])->name('contact.insorence');
    
    
  
    
});

    Route::middleware(['web'])->group(function () {
        Route::get('admin/edit_customer/{id}', [StudentController::class, 'EditCustomer'])->name('user.edit_customer');
    Route::get('admin/generate-pdf', [PDFController::class, 'generatePDF'])->name('user.generate-pdf');
    Route::get('admin/insorence-pdf', [PDFController::class, 'generateInsoPDF'])->name('user.insorence-pdf');
});


// ********** User Routes *********
Route::group(['middleware'=>['web','checkUser']],function(){//'prefix' => 'user',
    
    Route::get('/dashboard',[StudentController::class,'dashboard']);
    Route::get('/dashboard',[StudentController::class,'dashboard'])->name('user.dashboard');
    Route::get('/customer_pdf',[StudentController::class,'CustomerPDF'])->name('user.customer_pdf');
    Route::get('/health_pdf',[StudentController::class,'CustomerHelth_PDF'])->name('user.health_pdf');
    Route::post('/feedback',[StudentController::class,'FeedbackUser'])->name('user.feedback');

    Route::post('/customer_update/{id}',[StudentController::class,'CustomerUpdate'])->name('user.customer_update');
    
    Route::post('user/password/update',[MainUserController::class,'UserPasswordUpdate'])->name('user.password.update');
    Route::get('user/password/view',[MainUserController::class,'UserPassword'])->name('user.profile.view');
    Route::post('user/profile/store',[MainUserController::class,'UserProfileStore'])->name('profile.store');
    Route::get('user/profile', [MainUserController::class, 'UserProfile'])->name('user.profile');
    Route::get('admin/user/profile/edit', [MainUserController::class, 'UserProfileEdit'])->name('profile.edit');
});