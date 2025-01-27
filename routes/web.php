<?php

// use App\Http\Controllers\customer\Auth\LoginController;

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CMSHomeController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\customer\Auth\LoginController;
use App\Http\Controllers\customer\CartController;
use App\Http\Controllers\customer\ContactUsController;
use App\Http\Controllers\customer\CustomerProfileController;
use App\Http\Controllers\customer\SignController;
use App\Http\Controllers\DBBackupController;
use App\Http\Controllers\DealerSubscriptionController;
use App\Http\Controllers\Guest\HomePageController;
use App\Http\Controllers\ManageSeoController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\PostalCodesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RadarApplicationAreaPageController;
use App\Http\Controllers\RadarCloudManagementController;
use App\Http\Controllers\RadarPolicyController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ShopBrowseController;
use App\Http\Controllers\TestimonialController;
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
use App\Http\Controllers\ShippingRateController;
use App\Models\AllCountryPincode;


use App\Http\Controllers\customer\InqueryController;
use App\Http\Controllers\customer\NewsletterController;

use App\Http\Controllers\customer\SolutionController;
use App\Models\Newsletter;
use App\Models\Order;
use Illuminate\Http\Request;


use App\Http\Controllers\BlogLikeController;
use App\Http\Controllers\BussignContorller;
use App\Http\Controllers\ContentPageController;

use App\Http\Controllers\customer\CustomerOrderController;

use App\Http\Controllers\LedController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductMediaController;
use App\Http\Controllers\SearchItemsController;
use App\Http\Controllers\ThankYouController;
use App\Http\Controllers\VASDController;
use Illuminate\Mail\Markdown;

use App\Http\Controllers\AdminContactusController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClientsLogosController;

use App\Http\Controllers\CouponController;

use App\Http\Controllers\ProductDescriptionController;

use App\Http\Controllers\ProductPricingController;
use App\Http\Controllers\ProductPublishController;
use App\Http\Controllers\ProductSeoController;
use App\Http\Controllers\ProductSetupController;
use App\Http\Controllers\TeamMemberController;

/*
* New Route
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
        //Here Customer === Employee :change (Syntax Only)
        Route::get('manage-employees', [UserController::class, 'index']);
        Route::get('/delete-employee/{id}', [UserController::class, 'delete_employee']);
        Route::get('/add-employee', [UserController::class, 'add_employee']);
        Route::get('/edit-employee/{id}', [UserController::class, 'edit_employee']);
        Route::put('/insert-employee', [UserController::class, 'insert_employee']);
        //User
        Route::get('/view-user/{id}', [UserController::class, 'view_user'])->name('user.view');
        Route::get('/user-customer-block/{id}', [UserController::class, 'block_user'])->name("user.block");

        require_once "admins/api.php";
//        require_once "admins/api2.php";

        Route::get('/product/edit/{id}', [ProductSetupController::class, 'product_edit_basic'])->name("product_basic_update");
        Route::get('/product/edit/copy/{id}', [ProductSetupController::class, 'product_copy'])->name("product_copy");

        Route::get('/add/product-specification/{id}', [ProductSetupController::class, 'add_specification_form'])->name("add_specification_form");

        Route::post('/add/product-specification/{id}', [ProductSetupController::class, 'add_specification_store'])->name("add_specification_store");

        Route::delete('/delete/product-specification/{id}', [ProductSetupController::class, 'destroy_specification'])->name("delete_specification_product");


        Route::get('/product-specification-options/{pid}/{id}', [ProductSetupController::class, 'product_specification_options'])->name("product_specification_options");

        Route::get('/product-specification-options/{pid}/{id}/form', [ProductSetupController::class, 'product_specification_options_add_form'])->name("product_specification_options_add_form");

        Route::get('/product-specification-options-edit/{id}', [ProductSetupController::class, 'product_specification_options_edit_form'])->name("product_specification_options_edit_form");


        Route::post('/product-specification-options/store', [ProductSetupController::class, 'product_specification_options_add_store'])->name("product_specification_options_add_store");


        Route::post('/product-specification-options/edit/options', [ProductSetupController::class, 'product_specification_options_edit_store'])->name("product_specification_options_edit_store");

        Route::delete('/product-specification-options-delete/{id}', [ProductSetupController::class, 'product_specification_options_delete']);


        Route::get('/product/{id}/edit/media', [ProductMediaController::class, 'open_media_form'])->name("product_media_page");

        Route::get('/product/{id}/edit/available-resources', [ProductMediaController::class, 'open_product_available_resource_form'])->name("open_product_available_resources");

        Route::delete('/product/delete/product_resource/{id}', [ProductMediaController::class, 'open_product_available_resource_delete'])->name("open_product_available_resource_delete");

        Route::post('/product/edit/store-product-resource', [ProductMediaController::class, 'open_product_available_resource_Store'])->name("open_product_resource_form_store");

        Route::get('/product/{id}/edit/open-product-resource/{f_id}', [ProductMediaController::class, 'open_product_resource_edit_form'])->name("open_product_resource_edit_form_page");

        Route::put('/product/edit/open-product-resource/{id}', [ProductMediaController::class, 'open_product_resource_edit_form_update'])->name("open_product_resource_edit_form_page_update");



        Route::get('/product/{id}/edit/open-product-features', [ProductMediaController::class, 'open_product_features_form'])->name("open_product_features_form_page");
        Route::post('/product/edit/open-product-features', [ProductMediaController::class, 'open_product_features_Store'])->name("open_product_features_form_store");

        Route::get('/product/{id}/edit/open-product-features/{f_id}', [ProductMediaController::class, 'open_product_features_edit_form'])->name("open_product_features_edit_form_page");

        Route::delete('/product/delete/product_features/{id}', [ProductMediaController::class, 'open_product_features_delete'])->name("open_product_features_deleted");

        Route::post('/product/edit/media', [ProductMediaController::class, 'store'])->name("product_media_store");
        Route::post('/product/edit/media/images', [ProductMediaController::class, 'store_all_images'])->name("product_media_store_images");
        Route::delete('/product/delete/media/images/{id}', [ProductMediaController::class, 'delete_images'])->name("product_media_delete_images");


        Route::get('/product/{id}/edit/pricing', [ProductPricingController::class, 'open_pricing_form'])->name("product_pricing_page");

        Route::post('/product/edit/pricing', [ProductPricingController::class, 'open_pricing_store'])->name("product_pricing_store");
        Route::post('/product/edit/quantity', [ProductPricingController::class, 'open_quantity_store'])->name("open_quantity_store");


        Route::get('/product/{id}/edit/seo', [ProductSeoController::class, 'open_seo_form'])->name("product_seo_page");
        Route::post('/product/edit/seo', [ProductSeoController::class, 'open_seo_edit_store'])->name("product_seo_store");

        Route::resource('coupons', CouponController::class);

        Route::get('/content-page/{page_name}/', [ContentPageController::class, 'index'])->name("show_page_content");
        Route::post('/content-page/{page_name}/', [ContentPageController::class, 'store'])->name("content_store_update");
        Route::get('/content-page/{page_name}/edit', [ContentPageController::class, 'edit'])->name("show_page_content_edit");

        Route::get('/product/{id}/edit/description', [ProductDescriptionController::class,'open_description_form'])->name("open_product_description_form");
        Route::post('/product/edit/description', [ProductDescriptionController::class, 'open_description_store'])->name("product_description_store");

        Route::get('/product/{id}/edit/publish', [ProductPublishController::class,'open_publish_form'])->name("open_product_publish_form");
        Route::post('/product/edit/publish', [ProductPublishController::class, 'product_publish_update'])->name("product_publish_update");

        Route::get('/cms/clients', [ClientsLogosController::class,'index'])->name("clients_index");

        Route::get('/cms/clients/create', [ClientsLogosController::class,'create'])
            ->name("clients_create");

        Route::post('/cms/clients/create', [ClientsLogosController::class,'store'])
            ->name("clients_store");

        Route::get('/cms/clients/{id}/edit', [ClientsLogosController::class,'edit'])
            ->name("clients_edit");

        Route::put('/cms/clients/{id}', [ClientsLogosController::class,'update'])
            ->name("clients_update");

        Route::delete('/cms/clients/{id}', [ClientsLogosController::class,'destroy'])->name("clients_delete");

        Route::get('/orders', [OrderController::class,'index'])->name("orders_index");
        Route::get('/orders/{id}', [OrderController::class,'show'])->name("orders_show");
        Route::put('/orders/{id}/update-tracking', [OrderController::class, 'updateTracking'])->name('orders.updateTracking');

        Route::post('change-order-status', [OrderController::class,'changeOrderStatus'])->name('order.status.submit');



        Route::get('/cms/team-members', [TeamMemberController::class,'index'])->name("team_member_index");
        Route::get('/cms/team-members/create', [TeamMemberController::class,'create'])
            ->name("team_member_create");
        Route::post('/cms/team-members/create', [TeamMemberController::class,'store'])
            ->name("team_member_store");
        Route::get('/cms/team-members/{id}/edit', [TeamMemberController::class,'edit'])
            ->name("team_member_edit");
        Route::put('/cms/team-members/{id}', [TeamMemberController::class,'update'])
            ->name("team_member_update");


        Route::delete('/cms/team-members/{id}', [TeamMemberController::class,'destroy'])->name("team_member_delete");


        Route::get('/cms/banners', [BannerController::class,'index'])->name("banners_index");
        Route::get('/cms/banners/create', [BannerController::class,'create'])
            ->name("banners_create");
        Route::post('/cms/banners/create', [BannerController::class,'store'])
            ->name("banners_store");
        Route::get('/cms/banners/{id}/edit', [BannerController::class,'edit'])
            ->name("banners_edit");
        Route::put('/cms/banners/{id}', [BannerController::class,'update'])
            ->name("banners_update");


        Route::delete('/cms/banners/{id}', [BannerController::class,'destroy'])->name("banners_delete");



        Route::get('/contact-us', [AdminContactusController::class,'index'])->name("contact_us_index");

        Route::post('/admin/contact_us_bulk_delete', [AdminContactusController::class, 'bulkDelete'])->name('contact_us_bulk_delete');
        Route::post('/admin/contact_us_delete_all', [AdminContactusController::class, 'deleteAll'])->name('contact_us_delete_all');

        Route::get('/inquiries/pie-chart', [AdminContactusController::class, 'showPieAndTrendChart'])->name('inquiries.pie-chart');
        Route::get('/contact-us/month-wise-inquiries', [AdminContactusController::class, 'inquiryMonthWise'])->name('contact_us_month_wise_inquiries');

        Route::get('/contact-us/{id}/download-pdf', [AdminContactusController::class, 'downloadPdf'])->name('contact_us_download_pdf');

        Route::get('/contact-us/{id}', [AdminContactusController::class,'show'])->name("contact_us_show");
        Route::get('/change-inquiry-status/{id}', [AdminContactusController::class,'change_status'])->name("contact_us_change_status");

        Route::delete('/delete-inquiry-status/{id}', [AdminContactusController::class,'destroy'])->name("contact_us_delete_inquiry");

        Route::put('/order-status-change/{id}', [OrderController::class,'change_status_order'])
            ->name("change_status_order_product");

        Route::get('/reports/order/invoice/{id}', [OrderController::class,'generateInvoice'])->name("generate_order_invoice");


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

        Route::get('product-sku/{id}', [ProductController::class,'generate_sku'])->name('sku_generate');


        // db-backups
        Route::get('/download-db-backup', [DBBackupController::class, 'download'])->name('dbbackup');
        Route::get('/db-backup', [DBBackupController::class, 'db_backup_page'])->name('dbbackupform');
        Route::get('/manage-seo', [ManageSeoController::class, 'index'])->name('manage_seo_form');
        Route::get('/manage-seo/{id}', [ManageSeoController::class, 'edit'])->name('manage_seo_edit_form');
        Route::post('/manage-seo/{id}', [ManageSeoController::class, 'store'])->name('manage_seo_edit_store');
        //settings
        Route::get('/settings', [SettingsController::class, 'setting_home_page'])->name('setting-home-page');
        Route::post('/settings', [SettingsController::class, 'store'])->name('store_setting_data');
        //notifictions
        Route::get('/notifications', [NotificationsController::class, 'notifications_form'])->name('notifications_form');
        Route::get('/customer-all-emails', [NotificationsController::class, 'user_emails'])->name('all_user_emails');
        Route::post('/send-email-notification', [NotificationsController::class, 'send'])->name('send_email_notification');
        Route::get('manage-pages', [PagesController::class, 'index'])->name('manage.solution.pages');
        Route::get('sub-page/{id}', [PagesController::class, 'subPage'])->name('manage.solution.sub.page');

        Route::get('brochures', [SettingsController::class, 'brochureIndex'])->name('brochure.index');
        Route::get('vendors', [SettingsController::class, 'vendorIndex'])->name('vendors.index');
        Route::get('vendor/{id}', [SettingsController::class, 'vendorShow'])->name('vendor.show');


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

        Route::get('shipping-rate/delete/{id}', [ShippingRateController::class, 'destroy']);
        Route::resource('shipping-rate', ShippingRateController::class);
        Route::resource('testimonials', TestimonialController::class);


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

        Route::get('company', [ContactUsController::class, 'aboutUs'])->name('about.us');

        Route::any('shopping-bag', [CartController::class, 'shoppingBag'])->name('shopping.bag');

        Route::get('confirmation/{order_id}', [CartController::class, 'confirmation'])->name('confirmation');
        Route::post('add-shopping-bag', [CartController::class, 'addShoppingBag'])->name('store.shopping.bag');
        Route::post('add-accessory-shopping-bag', [CartController::class, 'addAccessoryBag'])->name('store.shopping.accessory.bag');
        Route::get('remove-cart-item/{id}', [CartController::class, 'removeCartItem'])->name('remove.cartitem');
        Route::get('specification-ajax', [SignController::class, 'specificationAjax'])->name('specification.ajax');

#solution-highway  -- highways
        Route::get('highways', [SolutionController::class, 'solutionHighway'])->name('solution.highway');


#solution-tunnels - tunnels
        Route::get('tunnels', [SolutionController::class, 'solutionTunnel'])->name('solution.tunnel');

#smart-cities
//Route::get('solution-city', [SolutionController::class, 'solutionCity'])->name('solution.city');
        Route::get('smart-cities', [SolutionController::class, 'solutionCity'])->name('solution.city');

#solution-transit - transit
        Route::get('transit', [SolutionController::class, 'solutionTransit'])->name('solution.transit');

#contact-us - contact
        Route::get('contact', [ContactUsController::class, 'contactUs'])->name('contact.us');



//about-us

//Route::get('blog-detail', [ContactUsController::class, 'blogDetail'])->name('blog.detail');
//
//
//Route::get('blog', [ContactUsController::class, 'blog'])->name('blog');

//signages emergency-signage
        Route::get('emergency-signage', [ContactUsController::class, 'signal'])->name('signal');


#smartcity - smart-cities
//Route::get('smart-cities', [ContactUsController::class, 'smartcity'])->name('smartcity');



#variable-sign-language - variable-message-signs
        Route::get('variable-message-signs', [ContactUsController::class, 'variableMessage'])->name('variable.message');


        Route::get('variable-speed-limit-signs', [ContactUsController::class, 'variableSpeedLimit'])->name('variable.speed.limit');

#passenger-information-display-system - passenger-information-display-systems
        Route::get('passenger-information-display-systems', [ContactUsController::class, 'pasengerInformationDisplay'])->name('pasenger.information.display.system');

#portable-variable-message-signs-portable-variable-message-sign
        Route::get('portable-variable-message-sign', [ContactUsController::class, 'portableVariableMessageSigns'])->name('portable.variable.message.signs');

#lane-control-system - lane-control-sign
        Route::get('lane-control-sign', [ContactUsController::class, 'laneControlSystem'])->name('lane.control.system');
        Route::get('portable-variable-message-sign/model/{id}', [ContactUsController::class, 'pvmsICop'])->name('pvms.i.cop');
        Route::post('newsletter', [NewsletterController::class, 'newsletter'])->name('newsletter.store');
        Route::post('submit-inquery', [InqueryController::class, 'store'])->name('inquery.submit');
        Route::any('success-response', [CartController::class, 'checkoutSuccess'])->name('success.response');
        Route::any('success-response', [CartController::class, 'checkoutSuccess'])->name('success.response');
        Route::any('cancel-response', [CartController::class, 'checkoutCancel'])->name('cancel.response');
//Route::get('solution/{slug}', [ContactUsController::class, 'vmsSubPage']);
        Route::get('variable-message-signs/model/{slug}', [ContactUsController::class, 'vmsSubPage'])->name('vms.sub.page');

        Route::get('emergency-signage/product/{slug}', [ContactUsController::class, 'signagesSubPage'])->name('signages.sub.page');

        Route::get('get-saved-address/{addressId}', [CartController::class, 'getSavedAddress'])->name('get-saved-address');
        Route::get('get-postal-code/postalcode', [CartController::class, 'getUserPostalCode'])->name('get.user.postal.code');



        require_once "customer/api2.php";

    });

    Route::group(['middleware' => 'country.redirect'], function () {
        Route::get('radar-speed-signs', 'SignController@radarSpeedSigns_v1')->name('radar.speed.signs');
        Route::get('radar-speed-signs/model/{productId}', 'SignController@radarSigns')->name('radar.sign');

        Route::get('radar-speed-signs/shop', [ShopBrowseController::class,"index"])->name('product.shop');
//        Route::get('radar-speed-signs', 'SignController@radarSpeedSigns')->name('radar.speed.signs');

    });

//    Route::get('radar-speed-signsv1', 'SignController@radarSpeedSigns_v1')->name('radar.speed.signs_v1');

    Route::get('radar-speed-signs-get-quote', 'SignController@radarSpeedSignsget_quote_v1')->name('radar.speed.signs__get_quote_v1');


    Route::post('/dealer-subscriptions', [DealerSubscriptionController::class, 'store'])->name('dealer.subscriptions.store');

//    require_once "guest/api.php";
//    require_once "guest/api2.php";



    Route::get('blog/{page_name}', [ContactUsController::class, 'blog_show'])->name('blog_show');
    Route::get('blog/{blog_id}/like-unlike', [BlogLikeController::class, 'like_unlike'])->name('blog_like_unlike');
//Route::get('blog', [ContactUsController::class, 'blog_listing'])->name('blog');
    Route::get('blogs', [ContactUsController::class, 'blog_listing'])->name('blog');
    Route::get('/content/search', [SearchItemsController::class, 'search_index'])->name('search_photon_things');

    Route::get('/photon/{page_name}', [CustomerProfileController::class, 'page_show'])->name('page_show_content');


//Route::get('/photon-system/{page_name}/', [ContentPageController::class, 'index_guest'])->name("show_page_policy");

    Route::get('/term-conditions', [ContentPageController::class, 'term_conditions'])->name("show_page_policy_term_conditions");
    Route::get('/about-us', [ContentPageController::class, 'about_us'])->name("show_page_policy_about_us");
    Route::get('/privacy-policy', [ContentPageController::class, 'privacy_policy'])->name("show_page_policy_privacy_policy");
    Route::get('/shipping', [ContentPageController::class, 'shipping'])->name("show_page_policy_shipping");
    Route::get('/return-policy', [ContentPageController::class, 'return_policy'])->name("show_page_policy_return_policy");


    Route::get('/thank-you', [ThankYouController::class, 'index'])->name("show_thank_you_page");

    Route::get('/order/show/{id}', [CustomerOrderController::class, 'show_order'])->name("show.order");

    Route::get('/reports/order/customer/invoice/{id}', [OrderController::class,'generateCustomerInvoice'])->name("customer_order_invoice");

    Route::get('/reports/order/invoice/view/{id}', [OrderController::class, 'viewCustomerInvoice'])->name('view.invoice');
    Route::get('/reports/order/invoice/download/{id}', [OrderController::class, 'downloadCustomerInvoice'])->name('download.invoice');



//VASD
    Route::get('/vehicle-actuated-speed-displays', [VASDController::class, 'vehicle_actuated_speed_displays'])->name("vehicle_actuated_speed_displays");

    Route::get('/led-ticker-tape', [LedController::class, 'led'])->name("led_ticker_tape");

    Route::get('/bus-destination-signs', [BussignContorller::class, 'bus_sign'])->name("bus_signs");



    //    Route::get('/', [HomePageController::class,'index'])->name('homepage');
    Route::any('shipping-and-checkout', [CartController::class, 'checkout'])->name('checkout');
    Route::any('place-order', [CartController::class, 'placeOrder'])->name('place.order');
    Route::post('currency-change', [CurrencyController::class, 'changeCurrency'])->name('currency.change');

    Route::get('/search-locations', [PostalCodesController::class, 'index'])->name('postal_code.search');

    Route::group(['middleware' => 'customerCheck'], function () {
        Route::get('edit-overview', [CustomerProfileController::class, 'overview'])->name('overview');
        Route::get('edit-address', [CustomerProfileController::class, 'address'])->name('address');
        Route::get('edit-history', [CustomerProfileController::class, 'history'])->name('history');
        Route::get('edit-profile', [CustomerProfileController::class, 'editProfileForm'])->name('edit.profile');
        Route::get('order-tracking/{id}', [CustomerProfileController::class, 'order_tracking'])->name('my.order.tracking');
        Route::get('edit-my-profile', [CustomerProfileController::class, 'editMyProfileForm'])->name('edit.my.profile');
        Route::get('edit-saved-card', [CustomerProfileController::class, 'savedCard'])->name('edit.saved.card');
        Route::get('add-new-address', [CustomerProfileController::class, 'addAddressForm'])->name('add.address.form');

        Route::post('update-profile', [CustomerProfileController::class, 'profileUpdate'])->name('update.profile');
        Route::post('add-address', [CustomerProfileController::class, 'storeAddress'])->name('add.address');
        Route::get('edit-address/{id}', [CustomerProfileController::class, 'editAddress'])->name('edit.address');
        Route::post('update-address', [CustomerProfileController::class, 'updateAddress'])->name('update.address');
        Route::get('delete-address/{id}', [CustomerProfileController::class, 'deleteAddress'])->name('delete.address');
        Route::get('default-address/{id}', [CustomerProfileController::class, 'defaultAddress'])->name('default.address');




        Route::get('/account/menu', [SignController::class, 'radarSpeedSigns_menus'])->name("account.menu");


        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('dashboard', function () {
            dd(Auth::guard('customer')->user());
        })->name('dashboard');
    });
    Route::get('delete-cart-item/{id}', [CartController::class, 'deleteCartTableItem'])->name('delete.cart.table.item');
});

Route::get('/radar-cloud-management', [RadarCloudManagementController::class, 'index'])->name('radar.cloud.management');

Route::post('/upload-photo', [CommonController::class, 'upload'])->name('upload-photo-summernote');
Route::get('photonplay-optimize', [CommonController::class, 'optimize']);
Route::get('csv', function(){
    AllCountryPincode::truncate();
   $filePath = storage_path('csv/allCountriesCSV.csv');
    $file = fopen($filePath, 'r');

    $header = fgetcsv($file);
    try {


    $users = [];
    while ($row = fgetcsv($file)) {
        dd($row);
        $users[] = array_combine($header, $row);
    }

    foreach($users as $i){
        $daTA=AllCountryPincode::create([
            'country' => $i['COUNTRY'],
            'state' => $i['STATE'],
            'city' => $i['CITY'],
            'postal_code' => $i['POSTAL_CODE'],
        ]);

    }
    }catch (\Exception $e){
        return $e->getMessage();
    }
    return true;
});

Route::get('php', function() {
    return phpinfo();
});
Route::get('/product/{id}/edit/media-ajax', [ProductMediaController::class, 'open_media_form_ajax'])->name("product_media_page_ajax");
Route::post('download-brochure', [SignController::class, 'downloadBrochure'])->name('download.brochure');
Route::post('vendor-store', [SignController::class, 'vendorStore'])->name('vendor.store');
Route::get('dealership', [ContactUsController::class, 'dealership'])->name('dealership');


Route::group(['prefix' => 'radar_speed_sign', 'as' => 'radar_speed_sign.'], function () {
    Route::get('municipalities', [RadarApplicationAreaPageController::class, 'municipalities'])->name('municipalities');
    Route::get('campus', [RadarApplicationAreaPageController::class, 'campus'])->name('campus');
    Route::get('school-zones', [RadarApplicationAreaPageController::class, 'school_zone'])->name('school_zone');
    Route::get('parking-lot', [RadarApplicationAreaPageController::class, 'parking_lot'])->name('parking_lot');

    Route::get('neighbourhoods', [RadarApplicationAreaPageController::class, 'neighbourhoods'])->name('neighbourhoods');
    Route::post('product-sku/find_sku/{id}', [ProductController::class,'find_sku'])->name('find_sku');

});


require_once base_path('routes/policy.php');



/**
 * Route for displaying the Warranty and Guarantee Policy page.
 */
Route::get('warranty-guarantee', [RadarPolicyController::class, 'warranty_guarantee'])->name('radar.warranty_guarantee');

/**
 * Route for displaying the Security and Privacy Policy page.
 */
Route::get('security-privacy-policy', [RadarPolicyController::class, 'security_privacy_policy'])->name('radar.security_privacy_policy');

/**
 * Route for displaying the Secure Shopping Policy page.
 */
Route::get('secure-shopping', [RadarPolicyController::class, 'secure_shopping'])->name('radar.secure_shopping');

/**
 * Route for displaying the Do Not Sell or Share Policy page.
 */
Route::get('do-not-sell', [RadarPolicyController::class, 'do_not_sell'])->name('radar.do_not_sell');

/**
 * Route for displaying the Shipping and Return Policy page.
 */
Route::get('shipping-return', [RadarPolicyController::class, 'shipping_return'])->name('radar.shipping_return');

/**
 * Route for displaying the Terms and Conditions page.
 */
Route::get('photon-terms-conditions', [RadarPolicyController::class, 'terms_conditions'])->name('radar.terms_conditions');

/**
 * Route for displaying the Accessibility Statement page.
 */
Route::get('accessibility-statement', [RadarPolicyController::class, 'accessibility_statement'])->name('radar.accessibility_statement');

