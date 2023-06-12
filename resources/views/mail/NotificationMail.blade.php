@component('mail::message')
    <table style="width: 100%;">
        <tr>
            <td>
                <img src="https://www.photonplay.com/img/logo-dark.png"  style="max-height: 80px;" alt="Logo"/>
            </td>
        </tr>
    </table>
    <hr/>
    {!! $message->body !!}
    <h4>
    Thanks,<br>
    {{ config('app.name') }}</h4>
@endcomponent
