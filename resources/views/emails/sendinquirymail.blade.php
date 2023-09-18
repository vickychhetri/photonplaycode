@component('mail::message')
# Inquiry

**Hey Admin, **

Subject: Inquiry - {{$body['subject']}}

Name: {{$body['first_name']}} {{$body['last_name']}}
Email: {{$body['email']}}
Company: {{$body['company_name']}}
Mobile: {{$body['phone_number']}}
Message: {{$body['message']}}



Page URL: {{$body['url']}}



-
-
-
-

Thanks,<br>
{{ config('app.name') }}
@endcomponent
