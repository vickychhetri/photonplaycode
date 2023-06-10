<?php


use App\Http\Controllers\BlogLikeController;
use App\Http\Controllers\ContentPageController;
use App\Http\Controllers\customer\ContactUsController;
use App\Http\Controllers\customer\CustomerProfileController;
use App\Http\Controllers\SearchItemsController;
use App\Http\Controllers\ThankYouController;

Route::get('blog/{page_name}', [ContactUsController::class, 'blog_show'])->name('blog_show');
Route::get('blog/{blog_id}/like-unlike', [BlogLikeController::class, 'like_unlike'])->name('blog_like_unlike');
Route::get('blog', [ContactUsController::class, 'blog_listing'])->name('blog');
Route::get('/content/search', [SearchItemsController::class, 'search_index'])->name('search_photon_things');

Route::get('/photon/{page_name}', [CustomerProfileController::class, 'page_show'])->name('page_show_content');


Route::get('/photon-system/{page_name}/', [ContentPageController::class, 'index_guest'])->name("show_page_policy");

Route::get('/thank-you', [ThankYouController::class, 'index'])->name("show_thank_you_page");
