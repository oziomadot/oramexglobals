<x-app-layout>
<div class="bg-slate-50 p-4 grid place-content-center">
    <div class="grid place-content-center bg-lime-100 p-2">
        <h1 class="font-extrabold font-Audiowide">
        CERTIFICATE VERIFICATION</h1></div>
        <div>
            <p>
                This is to testify that this certificate was issued to
            </p>
                <table class="mb-4">
                    <thead>
                        <tr>
                            <th>Training No</th>
                            <th>Name</th>
                            <th>Certified on</th>
                            <th>Verified</th>

                        </tr>


                    </thead>
                    <tbody>
                        <tr class="bg-yellow-100">
                            <td class="bg-slate-100 p-2">
                            {{ $training->trainingId }}
                        </td>
                        <td class="bg-green-100 p-2">
                            {{ $training->firstname }} {{ $training->surname }}
                        </td>
                        <td class="bg-amber-100 p-2">
                            {{ $training->interest->name }}
                        </td>
                        <td>
                            <img src="{{ asset('storage/img/verified.png') }}" class="p-2 w-12"/>
                        </td>
                        </tr>


                    </tbody>

                </table>
<a href="/" class="button bg-blue-200 p-2 rounded-lg font-bold text-lg shadow-xl m-2 mt-8">Home</a>

        </div>
</div>
</x-app-layout>
