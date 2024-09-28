<x-mail::message>
# Training Registeration Confirmation

This is to confirm that you registeration for the upcoming training is successful.
Keep an eye on your email and whatsapp for update.

Training ID: <b> {{ $trainee->id }} </b>
Interest:  <b> {{ $trainee->interest }} </b>

@if($trainee->certificate == 1)
You are interested in getting a certificate at the end of training.
NB:
For the certificate, you are required to pay the sum of <b> One thousand, five hundred naira <(N1,500) only into this account details

Bank name: <b> UBA</b>
Account name: <b> Oramex Globals Limited</b>
Account number: <b></b>

After payment, send evidence of payment to this whatsapp number: 07079414708


<b>Cash payment will not be accepted</b>

@endif

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button> --}}

Thanks,<br>

Okechi Chimezie
Manager,
Oramex Globals Limited
{{ config('app.name') }}
</x-mail::message>
