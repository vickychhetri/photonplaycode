<?php


use App\Http\Controllers\BlogLikeController;
use App\Http\Controllers\BussignContorller;
use App\Http\Controllers\ContentPageController;
use App\Http\Controllers\customer\ContactUsController;
use App\Http\Controllers\customer\CustomerOrderController;
use App\Http\Controllers\customer\CustomerProfileController;
use App\Http\Controllers\customer\SignController;
use App\Http\Controllers\LedController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SearchItemsController;
use App\Http\Controllers\ThankYouController;
use App\Http\Controllers\VASDController;

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



//VASD
Route::get('/vehicle-actuated-speed-displays', [VASDController::class, 'vehicle_actuated_speed_displays'])->name("vehicle_actuated_speed_displays");

Route::get('/led-ticker-tape', [LedController::class, 'led'])->name("led_ticker_tape");

Route::get('/bus-signs', [BussignContorller::class, 'bus_sign'])->name("bus_signs");



