<?php

use App\Http\Controllers\customer\CartController;
use App\Http\Controllers\customer\ContactUsController;
use App\Http\Controllers\customer\CustomerProfileController;
use App\Http\Controllers\customer\InqueryController;
use App\Http\Controllers\customer\NewsletterController;
use App\Http\Controllers\customer\SignController;
use App\Http\Controllers\customer\SolutionController;
use App\Models\Newsletter;
use App\Models\Order;
use Illuminate\Http\Request;

Route::any('shopping-bag', [CartController::class, 'shoppingBag'])->name('shopping.bag');

Route::get('confirmation/{order_id}', [CartController::class, 'confirmation'])->name('confirmation');
Route::post('add-shopping-bag', [CartController::class, 'addShoppingBag'])->name('store.shopping.bag');
Route::get('remove-cart-item/{id}', [CartController::class, 'removeCartItem'])->name('remove.cartitem');
Route::get('specification-ajax', [SignController::class, 'specificationAjax'])->name('specification.ajax');
Route::get('solution-highway', [SolutionController::class, 'solutionHighway'])->name('solution.highway');
Route::get('solution-tunnels', [SolutionController::class, 'solutionTunnel'])->name('solution.tunnel');
Route::get('solution-city', [SolutionController::class, 'solutionCity'])->name('solution.city');
Route::get('solution-transit', [SolutionController::class, 'solutionTransit'])->name('solution.transit');
Route::get('contact-us', [ContactUsController::class, 'contactUs'])->name('contact.us');
Route::get('about-us', [ContactUsController::class, 'aboutUs'])->name('about.us');
//Route::get('blog-detail', [ContactUsController::class, 'blogDetail'])->name('blog.detail');
//
//
//Route::get('blog', [ContactUsController::class, 'blog'])->name('blog');
Route::get('signages', [ContactUsController::class, 'signal'])->name('signal');
Route::get('smartcity', [ContactUsController::class, 'smartcity'])->name('smartcity');
Route::get('variable-sign-language', [ContactUsController::class, 'variableMessage'])->name('variable.message');
Route::get('variable-speed-limit-signs', [ContactUsController::class, 'variableSpeedLimit'])->name('variable.speed.limit');
Route::get('passenger-information-display-system', [ContactUsController::class, 'pasengerInformationDisplay'])->name('pasenger.information.display.system');
Route::get('portable-variable-message-signs', [ContactUsController::class, 'portableVariableMessageSigns'])->name('portable.variable.message.signs');
Route::get('lane-control-system', [ContactUsController::class, 'laneControlSystem'])->name('lane.control.system');
Route::get('pvms-i-cop/{id}', [ContactUsController::class, 'pvmsICop'])->name('pvms.i.cop');
Route::post('newsletter', [NewsletterController::class, 'newsletter'])->name('newsletter.store');
Route::post('submit-inquery', [InqueryController::class, 'store'])->name('inquery.submit');
Route::any('success-response', [CartController::class, 'checkoutSuccess'])->name('success.response');
Route::any('cancel-response', [CartController::class, 'checkoutCancel'])->name('cancel.response');
Route::get('solution/{slug}', [ContactUsController::class, 'vmsSubPage'])->name('vms.sub.page');
Route::get('signages/{slug}', [ContactUsController::class, 'signagesSubPage'])->name('signages.sub.page');

Route::get('get-saved-address/{addressId}', [CartController::class, 'getSavedAddress'])->name('get-saved-address');
