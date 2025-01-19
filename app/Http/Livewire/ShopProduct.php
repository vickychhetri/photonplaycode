<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\MasterConfiguration;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSpcializationOption;
use App\Models\ProductSpecilization;
use App\Models\SpecializationOption;
use App\Models\Specilization;
use App\Models\UserPostalCode;
use App\Util\Configure;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class ShopProduct extends Component
{
    use WithPagination;

    protected $listeners = ['refresh' => '$refresh'];
    public $category_accessory_id = null;
    public $sortOrder = 'asc';
    public $limit = 10, $sort;
    public $minPrice = 0;
    public $maxPrice,$cartItems,$cartCount,$sessionId,$exchangeRate,$currency_icon;

    public $accessory_id;
    public $limit_data = [5,10,15,20];
    public $title;
    public $sorting_data = [
        1 => 'A to Z',
        2 => 'Z to A',
        3 => 'Price: ascending',
        4 => 'Price: descending'
    ];

    public $priceRange = [0, 10000];
    public function mount()
    {
        $this->sessionId = Session::getId();
        $config = MasterConfiguration::where('code', Configure::SHOW_CATEGORY_PRODUCT_IN_SHOP)->first();
        if ($config) {
            $this->category_accessory_id = $config->value;
        }

        $this->accessory_id = MasterConfiguration::where(['code' => Configure::CATEGORY_ACCESSORY_ID, 'status' => 1])->value('value') ?? '';
        $this->exchangeRate = Session::get('exchange_rate', 1);
        $this->currency_icon = Session::get('currency_icon', '$');

    }

    public function render()
    {
        $query = Product::with([
            'images',
            'specilizations.specilization',
            'specilizations.options',
            'specilizations.options.specializationoptions',
            'category',
            'product_resources'
        ])
            ->where('category_id', $this->category_accessory_id);

        $this->maxPrice = $query->max('price');

        if($this->priceRange) {
            $query = $query->whereBetween('price', [$this->priceRange[0], $this->priceRange[1]]);
        }

        if($this->sort == 1) {
            $query = $query->orderBy('title', 'asc');
        }

        if($this->sort == 2) {
            $query = $query->orderBy('title', 'desc');
        }

        if($this->sort == 3) {
            $query = $query->orderBy('price', 'asc');
        }

        if($this->sort == 4) {
            $query = $query->orderBy('price', 'desc');
        }
        if (Session::get('user')) {
            $this->cartCount = Cart::where('user_id', Session::get('user')->id)->count();
            $this->cartItems = Cart::where('user_id', Session::get('user')->id)->get();
        } else {
            $this->cartCount = Cart::where('session_id', $this->sessionId)->count();
            $this->cartItems = Cart::where('session_id', $this->sessionId)->get();
        }


        return view('livewire.shop-product',[
            'productLists' => $query->paginate($this->limit),
            'accessories' => $this->getAccessories()->paginate($this->limit)
        ]);
    }

    public function updatedPriceRange(){
        return $this->priceRange;
    }

    public function updatedSort(){
        return $this->sort;
    }

    public function clearFilters(){
        $this->sort = null;
        $this->limit_data = [5,10,15,20];
        $this->priceRange = null;
        $this->limit = 10;
        $this->minPrice = 0;
        $this->resetPage();

    }

    protected function getAccessories(){
        $query = Product::with([
            'images',
            'specilizations.specilization',
            'specilizations.options',
            'specilizations.options.specializationoptions',
            'category',
            'product_resources'
        ])
            ->where('category_id', $this->accessory_id);


        if($this->priceRange) {
            $query = $query->whereBetween('price', [$this->priceRange[0], $this->priceRange[1]]);
        }

        if($this->sort == 1) {
            $query = $query->orderBy('title', 'asc');
        }

        if($this->sort == 2) {
            $query = $query->orderBy('title', 'desc');
        }

        if($this->sort == 3) {
            $query = $query->orderBy('price', 'asc');
        }

        if($this->sort == 4) {
            $query = $query->orderBy('price', 'desc');
        }

        return $query;
    }

    public function addToCart($id, $title,  $price, $categoryId, $coverImage)
    {
        if(!Session::get('user')){
            $cart = Cart::where(['session_id' => $this->sessionId, 'product_id' => $id, 'price' => $price])->first();

            if($cart){
                $cart->update(['quantity' => $cart->quantity + 1]);
            }else{
                Cart::create([
                    'session_id' => $this->sessionId,
                    'product_id' => $id,
                    'price' => $price,
                    'title' => $title,
                    'category' => $categoryId,
                    'quantity' => 1,
                    'cover_image' => $coverImage,
                    'currency_code'=> $this->currency_icon,
                    'exchange_rate'=>$this->exchangeRate,
                ]);
            }

        }else{
            $cart = Cart::where(['user_id' => Session::get('user')->id, 'product_id' => $id, 'price' => $price,])->first();

            if($cart){
                $cart->update(['quantity' => $cart->quantity + $this->quantity]);
            }else{
                Cart::create([
                    'user_id' => Session::get('user')->id,
                    'product_id' => $id,
                    'price' => $price,
                    'title' => $title,
                    'category' => $categoryId,
                    'quantity' => 1,
                    'cover_image' => $coverImage,
                    'currency_code'=> $this->currency_icon,
                    'exchange_rate'=>$this->exchangeRate,
                ]);
            }

        }
        $total_count = 0;
        if(!Session::get('user')){
            $cart_table =  Cart::select('quantity')->where('session_id', Session::getId())->get();
            foreach($cart_table as $cart_t){
                $total_count += $cart_t->quantity;
            }
        }else {
            $cart_table =  Cart::select('quantity')->where('user_id', Session::get('user')->id)->get();
            foreach($cart_table as $cart_t){
                $total_count += $cart_t->quantity;
            }
        }
        $this->emit('trigger-modal');
        $this->emit('cartUpdated', $total_count);
    }


    public function navigateToShopping(){
        return redirect()->route('customer.shopping.bag');
    }
}

