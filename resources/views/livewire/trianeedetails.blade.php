<div>

    <div class="bg-slate-300 p-10 ">
        <div class="block flex justify-center p-10">
    <form wire:submit.prevent="search">
        <p> Enter your details to confirm your registeration</p>
        <input type="text" wire:model="details" class="rounded " placeholder="enter your email or training id or your phone number">
        @error('details') <span class="error">{{ $message }}</span> @enderror

        <button class="bg-cyan-700 p=12 rounded m-8 text-lg w-20" type="submit">Search</button>
    </form>



    </div>


@if($trainee)
@foreach($trainee as $trainee)

{{-- border border-green-500 rounded-lg p-4 border-4 --}}

    <div class="block w-full flex justify-center">
        <table class="table-auto ">
            <thead>
                <tr class="flex space-x-12  bg-teal-300 ">
                    <th >
                        TRAINING ID
                    </th>
                    <th>
                        NAME
                    </th>
                    <th>
                        PHONE NUMBER
                    </th>
                    <th>
                        EMAIL
                    </th>
                    <th>
                        REGISTERED FOR
                    </th>
                    @if($trainee->paid != null)

                    <th>
                        CERTIFICATE
                    </th>
                    @endif

                </tr>
            </thead>
            <tbody class="p-4 ">
                <tr class="border-double text-base flex space-x-12  bg-amber-300 ">



                    <td class="text-lg">
                        {{ $trainee->trainingId }}
                    </td>

                    <td class="text-lg">
                        {{ $trainee->surname }} {{ $trainee->firstname }}
                    </td>
                    <td class="text-lg">
                        {{ $trainee->phonenumber }}
                    </td>
                    <td class="text-lg">
                        {{ $trainee->email }}
                    </td>
                    <td class="text-lg">
                        {{ $trainee->interest->name }}
                    </td>

                    @if($trainee->paid && $trainee->attendance != null)
                    <td class="text-lg">


                            <a href="/verify/{{ $trainee->id }}/certificate">
                        <button name="Download"  type="button" class="bg-green-700 p-1 rounded-lg text-white"> Download </button>
                    </a>

                    </td>
                    @elseif($trainee->paid != null && $trainee->attendance == null)
                    <td class="text-lg">
                      You have not fulfilled the condition to obtain certificate. You need to attend the training to be able to obtain certificate.
                      Contact the management please
                    </td>
                    @endif

                </tr>
            </tbody>
        </table>
    </div>

    @endforeach
    <div class=" w-full grid grid-cols-2 gap-4 place-content-end ">
    <a href="/">

    <button class="bg-lime-300 p=12 rounded m-8 text-lg w-20" type="button">Home</button>
</a>
</div>
@endif

</div>
</div>
