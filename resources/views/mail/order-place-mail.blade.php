@component('mail::message')
# Introduction

The body of your message.
{{$data}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
