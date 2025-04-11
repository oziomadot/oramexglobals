<x-mail::message>
# {{ $messages['title'] }}



{{ $messages['message'] }}

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>

Okechi Chimezie<br>
Manager,<br>
Oramex Globals Limited
{{ config('app.name') }}
</x-mail::message>
