@component('mail::message')
    # Hello {{ $name }}
    {{ $message }}
    @component('mail::button', ['url' => 'http://www.zasusoft.com/'])
        Visit Our Website
    @endcomponent
    Thanks,
    {{ config('app.name') }}
@endcomponent
