<?php

namespace App\Http\Livewire;

use App\Models\MasterConfiguration;
use App\Models\Product;
use App\Util\Configure;
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
    public $maxPrice;

    public $limit_data = [5,10,15,20];
    public $sorting_data = [
        1 => 'A to Z',
        2 => 'Z to A',
        3 => 'Price: ascending',
        4 => 'Price: descending'
    ];

    public $priceRange = [0, 10000];
    public function mount()
    {
        $config = MasterConfiguration::where('code', Configure::SHOW_CATEGORY_PRODUCT_IN_SHOP)->first();
        if ($config) {
            $this->category_accessory_id = $config->value;
        }

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


        return view('livewire.shop-product',[
            'productLists' => $query->paginate($this->limit)
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
}

