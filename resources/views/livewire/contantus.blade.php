<div>
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8 bg-linear-to-r from-white to-cyan-400">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
          <div class="relative left-1/2 -z-10 aspect-1155/678 w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl">Contact Us</h2>
          <p class="mt-2 text-lg/8 text-gray-600">Use this form to tell us what kind of service that you need.</p>
        </div>


        <form  wire:submit.prevent="save" class="mx-auto mt-16 max-w-xl sm:mt-20 bg-lime-50 p-4">
            @honeypot
            <x-honeypot livewire-model="extraFields" />

          <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">

            <div class="sm:col-span-2">
                <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
                <div class="mt-2.5">
                  <input type="email" name="email" wire:model.live.defer.debounce.500="email" id="email" autocomplete="email" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                </div>
                <x-formerror name="email"/>
              </div>

@if($email)
@if($emailExist)

<div>
    <label for="service" class="block text-sm/6 font-semibold text-gray-900">Select service needed</label>
    <x-formerror name="choice"/>
    <select name="choice" wire:model="choice" id="">
        <option value="">Choose service</option>
        @foreach($service as $service)
        <option value="{{ $service->id }}">{{ $service->name }}</option>
        @endforeach
    </select>
  </div>
<div class="sm:col-span-2">
  <label for="message" class="block text-sm/6 font-semibold text-gray-900">Message</label>
  <div class="mt-2.5">
    <textarea name="message" wire:model="message" id="message" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"></textarea>
  </div>
</div>
<x-formerror name="message"/>
</div>

@else
            <div>
              <label for="first-name" class="block text-sm/6 font-semibold text-gray-900">First name</label>
              <div class="mt-2.5">
                <input type="text" name="firstname" wire:model="firstname" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                <x-formerror name="firstname"/>
            </div>
            </div>
            <div>
              <label for="lastname" class="block text-sm/6 font-semibold text-gray-900">Last name</label>
              <div class="mt-2.5">
                    <input type="text" name="lastname" wire:model="lastname" id="lastname" autocomplete="family-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
              <x-formerror name="lastname"/>
            </div>
            </div>
    <div class="sm:col-span-2">


            <x-formlable name="Date of birth" />
            <x-forminput name="dob" type="date" wire:model.defer="dob"/>

    </div>
            <div class="sm:col-span-2">
              <label for="company" class="block text-sm/6 font-semibold text-gray-900">Address</label>
              <div class="mt-2.5">
                <input type="text" name="address" wire:model="address" id="address" autocomplete="organization" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
                <x-formerror name="address"/>
            </div>
            </div>

            <div class="sm:col-span-2">

                <x-formlable name="Gender"/>
                <label for="male" class="ml-4"> Male</label>
                <input name= "gender" type="radio" value="1" class="inline-block mr-4 ml-4" wire:model.defer="gender"/>

                <label for="female" class="ml-4"> Female </label> <input name= "gender" type="radio" value="0"  class="ml-4" wire:model.defer="gender"/>
                <x-formerror name="gender"/>
            </div>


            <div class="sm:col-span-2">
              <label for="phone-number" class="block text-sm/6 font-semibold text-gray-900">Phone number</label>
              <div class="mt-2.5">
                <div class="flex rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
                  <input type="text" name="phonenumber" wire:model="phonenumber" id="phone-number" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="080-123-45678">
                </div>
                <x-formerror name="phonenumber"/>
              </div>
            </div>
            <div class="sm:col-span-2">
                <label for="phone-number" class="block text-sm/6 font-semibold text-gray-900">Whatsapp Number:  <span class="text-sm font-red-400">If different from phone number</span></label>
                <div class="mt-2.5">
                  <div class="flex rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
                    <input type="text" name="whatsapp" wire:model="whatsapp" id="phone-number" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="080-123-45678">
                  </div>
                  <x-formerror name="whatsapp"/>
                </div>
              </div>

              <div>
                <label for="service" class="block text-sm/6 font-semibold text-gray-900">Select service needed</label>
                <x-formerror name="choice"/>
                <select name="choice" wire:model="choice" id="">
                    <option value="">Choose service</option>
                    @foreach($service as $service)
                    <option value="{{ $service->id }}">{{ $service->name }}</option>
                    @endforeach
                </select>
              </div>
            <div class="sm:col-span-2">
              <label for="message" class="block text-sm/6 font-semibold text-gray-900">Message</label>
              <div class="mt-2.5">
                <textarea name="message" wire:model="message" id="message" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600"></textarea>
              </div>
            </div>
            <x-formerror name="message"/>
            </div>

          @endif
          @endif
          <div class="mt-10">
            <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's talk</button>
          </div>
        </form>

        <a href="/appservice">
        <x-general-button type="button">BACK</x-general-button></a>
      </div>

</div>
