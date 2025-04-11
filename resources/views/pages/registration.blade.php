<div>
    <x-app-layout>
        <div class="m-2 bg-lime-50 rounded-xl p-4 grid grid-cols-1 place-items-center">
        <div class="grid grid-cols-1 place-items-center mb-2 ">
            <h2> <p class=" font-bold text-xl sm:text-4xl sm:pt-4 text-lime-900  font-Audiowide text-center">
               Oramex Academy
            </p>
        </h2>
         <h3>   <p class="text-xl sm:text-4xl font-sans text-yellow-900 font-extrabold my-2">Registration form
            </p>
         </h3>

    @livewire('registration.check')

    <div class="grid place-content-center">
        <a href="/academy">
            <button class="rounded-lg bg-blue-300 p-2 w-20 text-lg font-black">Back</button>
        </a>
        </div>

</div>
</x-app-layout>

</div>
