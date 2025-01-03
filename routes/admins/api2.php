<?php

use App\Http\Controllers\AdminContactusController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ClientsLogosController;
use App\Http\Controllers\ContentPageController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductDescriptionController;
use App\Http\Controllers\ProductMediaController;
use App\Http\Controllers\ProductPricingController;
use App\Http\Controllers\ProductPublishController;
use App\Http\Controllers\ProductSeoController;
use App\Http\Controllers\ProductSetupController;
use App\Http\Controllers\TeamMemberController;

Route::get('/product/edit/{id}', [ProductSetupController::class, 'product_edit_basic'])->name("product_basic_update");

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
