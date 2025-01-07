<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RadarPolicyController;

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
