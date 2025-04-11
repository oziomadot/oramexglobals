<x-mail::message>
    # Training Registeration Confirmation

    Dear {{ $training->firstname }},

    This is to confirm that you registration for the upcoming training is successful but the unfortunate news is
    that you are not going to participate in this present ongoing training. The reason is that the available seat is full.

    Nevertheless, we will prioritize you in any of our upcoming activities.

    We have your details and we will always contact your for information.

    If you don't want to hear from us about subsequent training, click the button below.



 <x-mail::button :url="'/subscription/{training}'">
    Do not contact me
    </x-mail::button>



    Thanks,<br>

    Okechi Chimezie<br>
    Manager,<br>
   Oramex Globals Limited
{{ config('app.name') }}
</x-mail::message>
