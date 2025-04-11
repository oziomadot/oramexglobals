<div class="border-2 border-lime-400 bg-lime-100 p-1 sm:py-4 p-2 sm:px-8 rounded-xl">

    @if($showEmail)
    <form action="" wire:submit="checkregistrations">
    <x-formlable name="email"/>
    <x-forminput wire:model.defer="email" type="email" name="email"/>



  <x-primary-button  class="py-2 mt-4" >submit</x-primary-button>
    </form>
    @elseif($showPasswordField)


        <form action="" wire:submit="addNew">


            <x-formlable name="email" />
            <input  class = "border border-cyan-200 text-black w-80 rounded block ml-4"
                   name="email"
                   type = "email"
                   value="{{ $email }}"
                   wire:model.defer="email"
            />
                            <x-formerror name="email"/>

            <x-formlable name="password"/>
                <input class = "border border-cyan-200 text-black w-80 rounded block ml-4" wire:model.defer.live.debounce.2000ms="password" type="password" wire:model.defer="password"/>
                <x-formerror name="password"/>



            <x-formlable name="confirm Password"/>
                <input class = "border border-cyan-200 text-black w-80 rounded block ml-4" wire:model.defer.live.debounce.2000ms="confirmPassword" type="password" name="confirmPassword"/>
                <x-formerror name="confirmPassword"/>


            <x-formlable name="state Of Residence"/>
            <x-formerror name="stateOfResidence"/>
                <select name="stateOfResidenc" wire:model.defer="stateOfResidence" id="" class="border border-cyan-200 text-black w-80 rounded block ml-4">
                    <option value="0">Select your state of residence</option>
                    @foreach($stateOfResidence1 as $state)
                    <option value="{{ $state->id}}">{{ $state->name }}</option>
                    @endforeach
                </select>

            <x-formlable name="Tribe"/>
            <x-formerror name="tribe"/>
                <select name="tribe" id="" wire:model.defer="tribe"class="border border-cyan-200 text-black w-80 rounded block ml-4 mb-4" >
                    <option value="0">Select your tribe</option>
                    @foreach($tribe1 as $tribe)
                    <option value="{{ $tribe->id}}">{{ $tribe->name }}</option>
                    @endforeach
                </select>


                <x-formlable name="Current status" />
                <x-formerror name="currentstatus"/>
                <select name="currentstatus" id="" class="ml-4 block rounded" wire:model.defer="currentstatus">
                    <option value="0">Select your current status</option>
                    @foreach($currentstatus1 as $status)
                    <option value="{{ $status->id}}">{{ $status->name }}</option>
                    @endforeach

                </select>

            <x-primary-button  class="py-2" >submit
                <div wire:loading>
                    <svg>...</svg> <!-- SVG loading spinner -->
                </div>
            </x-primary-button>

        </form>


    @elseif($showForm)
        <div>
            <form action="" wire:submit="save">




            <div class="py-4 w-full flex justify-center">
                    <p class="text-xl font-mono font-extrabold">
                        REGISTRATION FORM
                    </p>
                </div>


                <x-formlable name="Surname" />
                <x-forminput name="surname" type="text" wire:model.defer="surname"/>

                <x-formlable name="First name" />
                <x-forminput name="firstname" type="text" wire:model.defer="firstname"/>

                <x-formlable name="Date of birth" />
                <x-forminput name="dob" type="date" wire:model.defer="dob"/>


            <div>

                <x-formlable name="Gender"/>
                <label for="male" class="ml-4"> Male</label>
                <input name= "gender" type="radio" value="1" class="inline-block mr-4 ml-4" wire:model.defer="gender"/>

                <label for="female" class="ml-4"> Female </label>
                <input name= "gender" type="radio" value="0"  class="ml-4" wire:model.defer="gender"/>
                <x-formerror name="gender"/>
            </div>


                <x-formlable name="Phone number" />
                <x-forminput name="phonenumber" type="text" wire:model.defer="phonenumber"/>

                <x-formlable name="Whatsapp number" />
                <x-forminput name="whatsapp" type="text" wire:model.defer="whatsapp"/>

                <x-formlable name="Email" />
                <x-forminput name="email"  type="email" value="{{ $email }}" wire:model.defer="email"/>


                <x-formlable name="password"/>
                <input class = "border border-cyan-200 text-black w-80 rounded block ml-4" wire:model.defer.live.debounce.300ms="password" type="password" wire:model.defer="password"/>



            <x-formlable name="confirm Password"/>
                <input class = "border border-cyan-200 text-black w-80 rounded block ml-4" wire:model.defer="confirmPassword" type="password" name="confirmPassword"/>


                <x-formlable name="state Of Residence"/>
                <select name="stateOfResidence" wire:model.defer="stateOfResidence" id="" class="border border-cyan-200 text-black w-80 rounded block ml-4">
                   <option value="">select from the list</option>
                    @foreach($stateOfResidence1 as $state)
                    <option value="{{ $state->id}}">{{ $state->name }}</option>
                    @endforeach
                </select>

            <x-formlable name="Tribe"/>

                <select name="tribe" id="" wire:model.defer="tribe"class="border border-cyan-200 text-black w-80 rounded block ml-4 mb-4" >
                    <option value="0">Select your tribe</option>
                    @foreach($tribe1 as $tribe)
                    <option value="{{ $tribe->id}}">{{ $tribe->name }}</option>
                    @endforeach
                </select>

                <x-formlable name="Current status" />
                <x-formerror name="currentstatus"/>
                <select name="currentstatus" id="" class="ml-4 block rounded" wire:model.defer="currentstatus">
                    <option value="0">Select your current status</option>
                    @foreach($currentstatus1 as $status)
                    <option value="{{ $status->id}}">{{ $status->name }}</option>
                    @endforeach

                </select>



            <div class="relative flex py-5 items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-gray-400">&#127881; 	&#127881; </span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <div class="px-4 flex justify-center">
                <p>
                    &#128512; Your journey has just began. &#128525;
                </p>
            </div>

            <div class="flex justify-between">
                <x-primary-button class="block bg-blue-600 mt-4">Submit</x-primary-button>
                <x-primary-button class="block bg-gray-600 mt-4" type="reset">Reset</x-primary-button>
                <a href="/">
                <x-primary-button class="block bg-red-600 mt-4" type="button">Cancel</x-primary-button></div>
                </a>

            </form>
        </div>
        @endif
</div>

</div>
