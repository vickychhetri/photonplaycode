<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RadarPolicyController extends Controller
{
    /**
     * Display the Warranty and Guarantee Policy view.
     *
     * This function returns the view for the company's warranty and guarantee policy page.
     *
     * @return \Illuminate\View\View
     */
    function warranty_guarantee() {
        return view("signv1.policy.waranty_guarantee");
    }

    /**
     * Display the Security and Privacy Policy view.
     *
     * This function returns the view for the company's security and privacy policy page.
     *
     * @return \Illuminate\View\View
     */
    function security_privacy_policy() {
        return view("signv1.policy.security_privacy_policy");
    }

    /**
     * Display the Secure Shopping Policy view.
     *
     * This function returns the view for the company's secure shopping policy page.
     *
     * @return \Illuminate\View\View
     */
    function secure_shopping() {
        return view("signv1.policy.secure_shopping");
    }

    /**
     * Display the Terms and Conditions view.
     *
     * This function returns the view for the company's terms and conditions page.
     *
     * @return \Illuminate\View\View
     */
    function terms_conditions() {
        return view("signv1.policy.terms_conditions");
    }

    /**
     * Display the Do Not Sell or Share Policy view.
     *
     * This function returns the view for the company's policy on selling or sharing customer information.
     *
     * @return \Illuminate\View\View
     */
    function do_not_sell() {
        return view("signv1.policy.do_not_sell_share");
    }

    /**
     * Display the Shipping and Return Policy view.
     *
     * This function returns the view for the company's shipping and return policy page.
     *
     * @return \Illuminate\View\View
     */
    function shipping_return() {
        return view("signv1.policy.shipping_return");
    }

    /**
     * Display the Accessibility Statement view.
     *
     * This function returns the view for the company's accessibility statement page.
     *
     * @return \Illuminate\View\View
     */
    function accessibility_statement() {
        return view("signv1.policy.accessibility_statement");
    }



}
