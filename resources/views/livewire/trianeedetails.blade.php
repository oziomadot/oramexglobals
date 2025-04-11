{{-- <x-app-layout> --}}
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


@if($training)
@foreach($training as $training)

{{-- border border-green-500 rounded-lg p-4 border-4  flex space-x-12 flex space-x-12--}}

    <div class="block w-full flex justify-center">
        <table class="table-auto ">
            <thead class="p-4 ">
                <tr class="  bg-teal-300 ">
                    <th class="p-2">
                        TRAINING ID
                    </th>
                    <th class="p-2 bg-amber-300">
                        NAME
                    </th>
                    <th class="p-2 bg-cyan-700">
                        PHONE NUMBER
                    </th>
                    <th class="p-2 bg-lime-300">
                        EMAIL
                    </th>
                    <th class="p-2 bg-gray-00">
                        REGISTERED FOR
                    </th>
                    @if($training->paid != null)

                    <th class="p-2 bg-gray-100">
                        CERTIFICATE
                    </th>
                    @endif

                </tr>
            </thead>
            <tbody class="p-4 ">
                <tr class="border-double border-white text-base   bg-amber-300 ">



                    <td class="text-lg p-2 bg-amber-300">
                        {{ $training->trainingId }}
                    </td>

                    <td class="text-lg p-2 bg-cyan-700">
                        {{ $training->surname }} {{ $training->firstname }}
                    </td>
                    <td class="text-lg p-2 bg-teal-300">
                        {{ $training->phonenumber }}
                    </td>
                    <td class="text-lg p-2 bg-green-300">
                        {{ $training->email }}
                    </td>
                    <td class="text-lg p-2  bg-gray-100">
                        {{ $training->interest->name }}
                    </td>

                    @if($training->paid && $training->attendance != null)
                    <td class="text-lg p-2 bg-green-50">


                            <a href="/verify/{{ $training->id }}/certificate">
                        <button name="Download"  type="button" class="bg-green-700 p-1 rounded-lg text-white"> Download </button>
                    </a>

                    </td>
                    @elseif($training->paid != null && $training->attendance == null)
                    <td class="text-lg p-2">
                      You have not fulfilled the condition to obtain certificate. You need to attend the training to be able to obtain certificate.
                      Contact the management please
                    </td>
                    @endif

                </tr>
            </tbody>
        </table>
    </div>








    @endforeach

@endif

<div class="flex justify-between">


<div class=" w-full grid grid-cols-2 gap-4 place-content-end ">
    <a href="/">

    <button class="bg-lime-300 p=12 rounded m-8 text-lg w-20 shadow-xl" type="button">Home</button>
</a>
</div>

<div>

    <a href="{{ route('training.create') }}">
        <button class="bg-cyan-300 p=12 rounded m-8 text-lg w-48 shadow-xl" type="button">
            Register for workshop
        </button>
    </a>
</div>
</div>
</div>
</div>
{{-- </x-app-layout> --}}
