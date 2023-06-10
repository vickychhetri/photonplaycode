@component('mail::message')
# Inquiry

**Hey Admin, **

{{$body['message']}}

- {{$body['company_name']}}
- {{$body['first_name']}} {{$body['last_name']}}
- {{$body['phone_number']}}
- {{$body['url']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
