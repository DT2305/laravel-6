@component('mail::message')
# Hello (^.^)

Welcome to my application.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
