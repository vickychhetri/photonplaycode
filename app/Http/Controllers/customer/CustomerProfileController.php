<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Models\ContentPage;
use App\Models\Country;
use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use App\Models\UserAddress;
use App\Notifications\PasswordChanged;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomerProfileController extends Controller
{
    public function order_tracking($id)
    {

        // Fetch the order by its ID with related user details
        $order = Order::with('user')->findOrFail($id);
        $customer = Customer::find(Session::get('user')->id);

        // Ensure the logged-in customer is authorized to view the order
        if ($customer->id != $order->user_id) {
            abort(403, 'Unauthorized access to this order.');
        }

        // Pass the order details to the view
        return view('customer.profile.tracking_detail', compact('order'));
    }


    public function editProfileForm(){
        $customer = Customer::find((Session::get('user')->id));
        return view('customer.profile.edit_profile', compact('customer'));
    }
    public function editMyProfileForm(){
        $customer = Customer::find((Session::get('user')->id));
        $countries = Country::all();
        return view('customer.profile.edit_profile_read', compact('customer','countries'));
    }

    public function address(){
        $user = Customer::with('address')->find(Session::get('user')->id);
        return view('customer.profile.address', compact('user'));
    }

    public function history(){
        $orders = Order::with('orderedProducts', 'orderedProducts.product', 'orderedProducts.product.category')->where('user_id', Session::get('user')->id)->where('payment_complete',1)->orderBy('id','DESC')->paginate(3);
        // dd($orders);
        return view('customer.profile.history', compact('orders'));
    }

    public function overview(){
        return view('customer.profile.overview');
    }
    public function savedCard(){
        return view('customer.profile.saved_card');
    }

    public function addAddressForm(){
        return view('customer.profile.add_address');
    }

    public function profileUpdate(Request $request){
        $request->validate([
            'email' => 'required|email',
            'phone_number' => 'nullable|integer',
            'phone_code' => 'nullable',
        ]);
        $customer = Customer::find(Session::get('user')->id);

        $customer->update([
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'phone_code' => $request->phone_code,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'company_name' => $request->company_name,
        ]);

        $customer->notify(new PasswordChanged($customer));
        session()->flash('success', 'Your changes have been saved successfully.');
        return redirect()->route('customer.edit.profile');
    }

    public function storeAddress(Request $request){
        $request->validate([
            'street_number' => 'required',
            'flat_suite' => 'nullable',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'postcode' => 'required|integer',
        ]);

        $data = $request->except('_token');
        $data['user_id'] = Session::get('user')->id;

        UserAddress::create($data);

        return redirect()->route('customer.address');
    }

    public function editAddress($id){
        $address = UserAddress::find($id);
        return view('customer.profile.edit_address', compact('address'));
    }

    public function updateAddress(Request $request){
        $address = UserAddress::find($request->id);
        $request->validate([
            'postcode' => 'nullable|integer',
        ]);

        $address->update([
            'street_number' => $request->street_number,
            'flat_suite' => $request->flat_suite,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postcode' => $request->postcode,
        ]);

        return redirect()->route('customer.address');
    }

    public function deleteAddress($id){
        $address = UserAddress::find($id);
        $address->delete();
        return redirect()->route('customer.address');
    }

    public function defaultAddress($id){
        UserAddress::where('user_id', Session::get('user')->id)->update(['is_default' => null]);
        $address = UserAddress::find($id);
        $address->update([
            'is_default' => 1,
        ]);
        return redirect()->route('customer.address');
    }


    public function page_show($page_name){
        $page=ContentPage::where('page_name',$page_name)->first();
        return view('customer.profile.content_template',compact('page'));
    }
}
