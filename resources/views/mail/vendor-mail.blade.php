@component('mail::message')
# Dear Admin

New Vendor tried to contact you.

@component('mail::table')
    |        |          |   
    | ------------- |:-------------:|
    | Name      | {{$body['name']}}      | 
    | Email      | {{$body['email']}}      | 
    | Phone Number     | {{$body['phone_number']}}      | 
    | Comapny Name      | {{$body['company_name']}}      | 
    | Country      | {{$body['country']}}      | 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
