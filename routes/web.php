<?php

// use App\Http\Controllers\customer\Auth\LoginController;

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CMSHomeController;
use App\Http\Controllers\customer\Auth\LoginController;
use App\Http\Controllers\customer\CartController;
use App\Http\Controllers\customer\CustomerProfileController;
use App\Http\Controllers\DBBackupController;
use App\Http\Controllers\Guest\HomePageController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProspectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SpecilizationController;
use App\Http\Controllers\SpecilizationOptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\PagesController;

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



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [HomeController::class, 'login'])->name('new_login');
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Auth::routes();
    // ___________________________ Admin Route ____________________________
    Route::group(['middleware' => ['auth', 'is_Admin']], function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


        Route::get('/edit-profile/{id}', [ProfileController::class, 'editProfileForm'])->name("edit_adminprofile_form");;
        Route::put('/edit-profile', [ProfileController::class, 'editProfile'])->name("edit_adminprofile");
        // Manage-Customer
        //Here Customer === Employee (Syntax Only)

        Route::get('manage-employees', [UserController::class, 'index']);
        Route::get('/delete-employee/{id}', [UserController::class, 'delete_employee']);
        Route::get('/add-employee', [UserController::class, 'add_employee']);
        Route::get('/edit-employee/{id}', [UserController::class, 'edit_employee']);
        Route::put('/insert-employee', [UserController::class, 'insert_employee']);

        require_once "admins/api.php";
        require_once "admins/api2.php";

        //cms
          Route::get('/cms-home', [CMSHomeController::class, 'index'])->name('cmshomepage');
        //blogs
          Route::resource('blog-categories', BlogCategoryController::class);
         Route::resource('blogs', BlogsController::class);

        //categories
        Route::get('category/delete/{id}', [CategoryController::class, 'delete']);
        Route::resource('category', CategoryController::class);

        //specilization
        Route::get('specilization/delete/{id}', [SpecilizationController::class, 'delete']);
        Route::get('specilization-option/delete/{id}', [SpecilizationOptionController::class, 'delete']);

        Route::resource('specilization', SpecilizationController::class);
        Route::resource('specilization-option', SpecilizationOptionController::class);
        Route::resource('product', ProductController::class);


        // db-backups
        Route::get('/download-db-backup', [DBBackupController::class, 'download'])->name('dbbackup');
        Route::get('/db-backup', [DBBackupController::class, 'db_backup_page'])->name('dbbackupform');

        //settings
        Route::get('/settings', [SettingsController::class, 'setting_home_page'])->name('setting-home-page');
        Route::post('/settings', [SettingsController::class, 'store'])->name('store_setting_data');
        //notifictions
        Route::get('/notifications', [NotificationsController::class, 'notifications_form'])->name('notifications_form');
        Route::get('/customer-all-emails', [NotificationsController::class, 'user_emails'])->name('all_user_emails');
        Route::post('/send-email-notification', [NotificationsController::class, 'send'])->name('send_email_notification');
        Route::get('manage-pages', [PagesController::class, 'index'])->name('manage.solution.pages');
        Route::get('sub-page/{id}', [PagesController::class, 'subPage'])->name('manage.solution.sub.page');


        Route::get('create-sub-page/{id}', [PagesController::class, 'createSubPage'])->name('manage.solution.create.sub.page');
        Route::get('delete-sub-page/{id}', [PagesController::class, 'deleteSubPage'])->name('manage.solution.delete.sub.page');
        Route::get('create-specification-page/{id}', [PagesController::class, 'createSpecificationSubPage'])->name('manage.solution.create.specification.page');
        Route::get('create-features-page/{id}', [PagesController::class, 'createFeaturesSubPage'])->name('manage.solution.create.features.page');
        Route::get('create-images-page/{id}', [PagesController::class, 'createImagesSubPage'])->name('manage.solution.create.images.page');

        Route::get('create-gallery-page/{id}', [PagesController::class, 'createGallerySubPage'])->name('manage.solution.create.gallery.page');

        Route::post('store-sub-page', [PagesController::class, 'store'])->name('manage.solution.store');
        Route::get('edit-specification-page/{id}', [PagesController::class, 'EditSpecificationSubPage'])->name('manage.solution.edit.specification.page');
        Route::post('update-specification-page', [PagesController::class, 'UpdateSpecificationSubPage'])->name('manage.solution.update.specification.page');
        Route::get('edit-features-page/{id}', [PagesController::class, 'editFeaturesSubPage'])->name('manage.solution.edit.features.page');
        Route::post('update-features-page', [PagesController::class, 'updateFeaturesSubPage'])->name('manage.solution.update.features.page');
        Route::post('store-sub-page-image', [PagesController::class, 'updateSingleImage'])->name('manage.solution.update.single.image');
        Route::any('store-sub-page-multi-image', [PagesController::class, 'updateMultiImage'])->name('manage.solution.update.multi.image');
        Route::post('store-sub-page-gallery', [PagesController::class, 'subPageGallery'])->name('sub.page.gallery');
        Route::get('add-pvms-products', [PagesController::class, 'addPvmsProductForm'])->name('add.pvms.products');
        Route::post('store-pvms-products', [PagesController::class, 'storePvmsProductForm'])->name('pvms.product.store');
        Route::get('download-pdf', [PagesController::class, 'downloadPdf'])->name('manage.solution.download.pdf');

    });
});

Route::group(['as' => 'customer.', 'namespace' => 'App\Http\Controllers\customer',], function () {
    Route::get('/', 'HomepageController@home_page')->name('homePage');

    Route::group(['namespace' => 'Auth'], function() {
        Route::get('/login', 'LoginController@loginForm')->name('loginForm');
       
//        Route::get('/', [HomeController::class ,'home_page'])->name('homePage');
        Route::get('register', 'LoginController@registerForm')->name('registerForm');
        Route::post('login', 'LoginController@login')->name('login');
        Route::post('register', 'LoginController@register')->name('register');
        Route::get('social-login/google', 'SocialLoginController@redirectToGoogle')->name('social.login');
        Route::get('/google/callback', 'SocialLoginController@handleGoogleCallback');
        Route::get('forgot-password', 'PasswordController@forepassPasswordForm');
        Route::get('reset-password/{token}', 'PasswordController@resetPassword')->name('reset_password');
        Route::post('forgot-password', 'PasswordController@forgotPassword')->name('forgot_password');
        Route::post('change-password', 'PasswordController@changePassword')->name('change_password');


        require_once "customer/api.php";
        require_once "customer/api2.php";

    });
    Route::get('radar-speed-signs', 'SignController@radarSpeedSigns')->name('radar.speed.signs');
    Route::get('radar-sign/{productId}', 'SignController@radarSigns')->name('radar.sign');

    require_once "guest/api.php";
    require_once "guest/api2.php";

    //    Route::get('/', [HomePageController::class,'index'])->name('homepage');

    Route::group(['middleware' => 'customerCheck'], function () {
        Route::get('edit-overview', [CustomerProfileController::class, 'overview'])->name('overview');
        Route::get('edit-address', [CustomerProfileController::class, 'address'])->name('address');
        Route::get('edit-history', [CustomerProfileController::class, 'history'])->name('history');
        Route::get('edit-profile', [CustomerProfileController::class, 'editProfileForm'])->name('edit.profile');
        Route::get('edit-saved-card', [CustomerProfileController::class, 'savedCard'])->name('edit.saved.card');
        Route::get('add-new-address', [CustomerProfileController::class, 'addAddressForm'])->name('add.address.form');

        Route::post('update-profile', [CustomerProfileController::class, 'profileUpdate'])->name('update.profile');
        Route::post('add-address', [CustomerProfileController::class, 'storeAddress'])->name('add.address');
        Route::get('edit-address/{id}', [CustomerProfileController::class, 'editAddress'])->name('edit.address');
        Route::post('update-address', [CustomerProfileController::class, 'updateAddress'])->name('update.address');
        Route::get('delete-address/{id}', [CustomerProfileController::class, 'deleteAddress'])->name('delete.address');
        Route::get('default-address/{id}', [CustomerProfileController::class, 'defaultAddress'])->name('default.address');

        Route::any('shipping-and-checkout', [CartController::class, 'checkout'])->name('checkout');
        Route::any('place-order', [CartController::class, 'placeOrder'])->name('place.order');



        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('dashboard', function () {
            dd(Auth::guard('customer')->user());
        })->name('dashboard');
    });
    Route::get('delete-cart-item/{id}', [CartController::class, 'deleteCartTableItem'])->name('delete.cart.table.item');
});

Route::post('/upload-photo', [CommonController::class, 'upload'])->name('upload-photo-summernote');
Route::get('photonplay-optimize', [CommonController::class, 'optimize']);
