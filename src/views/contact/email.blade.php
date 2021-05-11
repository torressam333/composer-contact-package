@component('mail::message')

    #Introduction

    You have a new message from {{ $name }}.
    <br>
    Message:
    {{ $message }}

    @component('mail::button', ['url' => ''])
        Button Text

        Thanks, <br>

        {{ config('app.name') }}

    @endcomponent
