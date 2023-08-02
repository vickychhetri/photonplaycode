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
Route::get('company', [ContactUsController::class, 'aboutUs'])->name('about.us');
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
Route::any('cancel-response', [CartController::class, 'checkoutCancel'])->name('cancel.response');
//Route::get('solution/{slug}', [ContactUsController::class, 'vmsSubPage']);
Route::get('variable-message-signs/model/{slug}', [ContactUsController::class, 'vmsSubPage'])->name('vms.sub.page');

Route::get('emergency-signage/product/{slug}', [ContactUsController::class, 'signagesSubPage'])->name('signages.sub.page');

Route::get('get-saved-address/{addressId}', [CartController::class, 'getSavedAddress'])->name('get-saved-address');
Route::get('get-postal-code/{postalCode}', [CartController::class, 'getUserPostalCode'])->name('get.user.postal.code');
