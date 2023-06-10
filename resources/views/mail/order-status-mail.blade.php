@component('mail::message')
#

Dear User,
Your {{$body['order_number']}} order status is {{$body['message']}}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
