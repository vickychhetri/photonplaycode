@component('mail::message')
# Inquiry

**Hey Admin, **

Subject: Inquiry - {{$body['subject']}}

Name: {{$body['first_name']}} {{$body['last_name']}}<br/>
Email: {{$body['email']}}<br/>
Company: {{$body['company_name']}}<br/>
Mobile: {{$body['phone_number']}}<br/>
Message: {{$body['message']}}<br/>
Page URL: {{$body['url']}}<br/>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
