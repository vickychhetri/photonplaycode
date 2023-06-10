<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = Customer::count();
        $category = Category::count();
        $products = Product::count();
        $orders = Order::where(['status' => 'complete'])->count();
        $Sr=1;
        $orderr = Order::where(['status' => 'complete'])->orderBy('id', 'desc')->take(30)->get();
        return view('Dashboard', compact('users', 'category', 'products', 'orders', 'orderr','Sr'));
    }
}
