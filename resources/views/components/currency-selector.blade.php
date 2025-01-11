{{--<div class="currency-selector d-flex align-items-center mt-2 mb-4">--}}
{{--    <form id="currency-form" action="{{ route('customer.currency.change') }}" method="POST" class="">--}}
{{--        @csrf--}}
{{--        <div class="input-group">--}}
{{--            <select name="currency" class="form-select" onchange="document.getElementById('currency-form').submit()">--}}
{{--                <option value="">-- Select --</option>--}}
{{--                @foreach($currencies as $currency)--}}
{{--                    <option value="{{ $currency->currency_code }}"--}}
{{--                        {{ session('currency_icon') === $currency->currency_code ? 'selected' : '' }}>--}}
{{--                        {{ $currency->label }}--}}
{{--                    </option>--}}
{{--                @endforeach--}}
{{--            </select>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</div>--}}
