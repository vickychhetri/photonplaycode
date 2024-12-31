<div>
    <form id="currency-form" action="{{ route('customer.currency.change') }}" method="POST">
        @csrf
        <select name="currency" onchange="document.getElementById('currency-form').submit()">
            <option value=""> --Select--</option>
            @foreach($currencies as $currency)
                <option value="{{ $currency->currency_code }}"
                    {{ session('currency_icon') === $currency->currency_code ? 'selected' : '' }}>
                    {{ $currency->currency_code }}
                </option>
            @endforeach
        </select>
    </form>
</div>

