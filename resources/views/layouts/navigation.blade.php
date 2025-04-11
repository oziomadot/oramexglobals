<nav x-data="{ open: false }" class="border-b border-gray-100  bg-amber-300 my-4  rounded-t-lg rounded-lg shadow-xl">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                @guest


            <div class="hidden space-x-8 sm:-my-px sm:ml-5 sm:flex font-bold text-black">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('HOME') }}
                    </x-nav-link>
                </div>



            {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-5 sm:flex">
                <x-nav-link :href="route('#')" :active="request()->routeIs('#')">
                    {{ __('ABOUT') }}
                </x-nav-link>
            </div> --}}
{{--
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('ContactUs')" :active="request()->routeIs('ContactUs')">
                {{ __('CONTACT US') }}
                </x-nav-link>
            </div> --}}


            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">


                    <x-nav-link :href="route('training.index')" :active="request()->routeIs('training.index')">
                    {{ __('WORKSHOP') }}
                    </x-nav-link>


            </div>

           {{-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('CustomerAppointment')" :active="request()->routeIs('CustomerAppointment')">
                {{ __('TRAINING') }}
                 </x-nav-link>
            </div> --}}


    @endguest

            @auth
            @if(Auth::guard('web')->user())

           <div class="grid grid-cols-7 gap-4">
                    <div class="hidden space-x-8 sm:-my-px sm:ml-2 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                         <x-general-button  class="bg-blue-700  text-white {{request()->routeIs('dashboard') ? 'bg-blue-300 text-black' : ''}}"  type="button" >
                            {{ __('DASHBOARD')}}
                         </x-general-button>
                    </x-nav-link>
                    </div>




                <div class="hidden space-x-8 sm:-my-px sm:ml-2 sm:flex">
                    <x-nav-link :href="route('agentschedules.index')" :active="request()->routeIs('agentschedules.index')">
                        <x-general-button  class="bg-blue-700 text-white {{request()->routeIs('agentschedules.index') ? 'bg-blue-300 text-black' : ''}}" type="button"  >
                            {{ __('APPOINTMENT')}}
                        </x-general-button>
                    </x-nav-link>
                </div>





            @else

            <div class="hidden space-x-8 sm:-my-px sm:ml-2 sm:flex">
             <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                 <x-general-button  class="bg-blue-700  text-white {{request()->routeIs('dashboard') ? 'bg-blue-300 text-black' : ''}}"  type="button" >
                     {{ __('DASHBOARD')}}
                 </x-general-button>
             </x-nav-link>
         </div>


         <div class="hidden space-x-8 sm:-my-px sm:ml-2 sm:flex">
                 <x-nav-link :href="route('sappointments')" :active="request()->routeIs('sappointments')">
                 <x-general-button  class="bg-blue-700  text-white {{request()->routeIs('sappointments') ? 'bg-blue-300 text-black' : ''}}"  type="button" >
                     {{ __('APPOINTMENT')}}
                 </x-general-button>
             </x-nav-link>
         </div>




         @if(Auth::guard('staff')->user() && Auth::guard('staff')->user()->role == 1)

         <div class="hidden space-x-8 sm:-my-px sm:ml-2 sm:flex">
                 <x-nav-link :href="route('staff.index')" :active="request()->routeIs('staff.index')">
                 <x-general-button  class="bg-blue-700  text-white {{request()->routeIs('staff.index') ? 'bg-blue-300 text-black' : ''}}"  type="button" >
                     {{ __('STAFF')}}
                 </x-general-button>
             </x-nav-link>
         </div>

         <div class="hidden space-x-8 sm:-my-px sm:ml-2 sm:flex">
                 <x-nav-link :href="route('jobapplications.index')" :active="request()->routeIs('jobapplications.index')">
                 <x-general-button  class="bg-blue-700  text-white {{request()->routeIs('jobapplications.index') ? 'bg-blue-300 text-black' : ''}}"  type="button" >
                     {{ __('APPLICANTS')}}
                 </x-general-button>
             </x-nav-link>
         </div>



         @endif

         @endif




        </div>

        @if(Auth::guard('web')->user())

                <!-- Settings Dropdown -->


                <div class="hidden sm:flex sm:items-center sm:ml-6">


                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{Auth::user()->firstname}}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>

                            </button>
                        </x-slot>



                        {{-- <x-slot name="content"> --}}
                            <x-dropdown-link :href="route('agents.show', Auth::user()->id)">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>


                </x-dropdown>
            </div>

            @else



 <!-- Settings Dropdown -->
  @if(Auth::guard('staff')->user())

 <div class="hidden sm:flex sm:items-center sm:ml-6">


    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">

                <div>{{Auth::guard('staff')->user()->firstname }}</div>
{{-- @endif --}}
                <div class="ml-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>

            </button>
        </x-slot>



        {{-- <x-slot name="content"> --}}
            {{-- @if(Auth::guard('staff')->user())  --}}
            <x-dropdown-link :href="route('staff.show', Auth::guard('staff')->user()->id)">
                {{ __('Profile') }}
            </x-dropdown-link>


            <!-- Authentication -->
            <form method="POST" action="{{ route('slogout') }}">
                @csrf

                <x-dropdown-link :href="route('slogout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>


</x-dropdown>
</div>
@endif





           @endif
        </div>
   @endauth


            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>



    <!-- Responsive Navigation Menu -->




    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

      @guest

        <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('HOME') }}
            </x-responsive-nav-link>
        </div>






        {{-- <div class="mt-3 space-y-1">
        <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
            {{ __('ABOUT') }}
         </x-responsive-nav-link>
        </div> --}}

        {{-- <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('ContactUs')" :active="request()->routeIs('ContactUs')">
            {{ __('CONTACT US') }}
             </x-responsive-nav-link>
        </div> --}}

        <div class="mt-3 space-y-1">

            <x-responsive-nav-link :href="route('training.index')" :active="request()->routeIs('training.index')">
            {{ __('WORKSHOP') }}
            </x-responsive-nav-link>


    </div>





{{--
    <div class="mt-3 space-y-1">
        <x-responsive-nav-link :href="route('WorkWithUs')" :active="request()->routeIs('WorkWithUs')">
        {{ __('TRAINING') }}
        </x-responsive-nav-link>
    </div> --}}




@endguest
        <!-- Responsive Settings Options -->
        @auth

        @if(Auth::guard('staff')->user())



<div class="mt-3 space-y-1">
    <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
        <x-general-button  class="bg-blue-700  text-white {{request()->routeIs('dashboard') ? 'bg-blue-300 text-black' : ''}}"  type="button" >
            {{ __('DASHBOARD')}}
        </x-general-button>
    </x-responsive-nav-link>
</div>



<div class="mt-3 space-y-1">
        {{-- <x-responsive-nav-link :href="route('sappointments')" :active="request()->routeIs('sappointments')">
        <x-general-button  class="bg-blue-700  text-white {{request()->routeIs('sappointments') ? 'bg-blue-300 text-black' : ''}}"  type="button" >
            {{ __('APPOINTMENT')}}
        </x-general-button>
    </x-responsive-nav-link> --}}
</div>



@if(Auth::guard('staff')->user() && Auth::guard('staff')->user()->role == 1)

<div class="mt-3 space-y-1">
        <x-responsive-nav-link :href="route('staff.index')" :active="request()->routeIs('staff.index')">
        <x-general-button  class="bg-blue-700  text-white {{request()->routeIs('staff.index') ? 'bg-blue-300 text-black' : ''}}"  type="button" >
            {{ __('STAFF')}}
        </x-general-button>
    </x-responsive-nav-link>
</div>

<div class="mt-3 space-y-1">
        <x-responsive-nav-link :href="route('jobapplications.index')" :active="request()->routeIs('jobapplications.index')">
        <x-general-button  class="bg-blue-700  text-white {{request()->routeIs('jobapplications.index') ? 'bg-blue-300 text-black' : ''}}"  type="button" >
            {{ __('APPLICANTS')}}
        </x-general-button>
    </x-responsive-nav-link>
</div>


@endif


@if(Auth::guard('staff')->user())
    <div class="pt-4 pb-1 border-t border-gray-200">
            <!-- Authentication -->
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::guard('staff')->user()->firstname }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::guard('staff')->user()->email }}</div>
            </div>


                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('staff.show', Auth::guard('staff')->user()->id)">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

            <form method="POST" action="{{ route('slogout') }}">
                @csrf

                <x-responsive-nav-link :href="route('slogout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
</div>
@endif

            @else


        <div class="mt-3 space-y-1">

            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{-- <x-general-button  class="bg-blue-700  text-white {{request()->routeIs('dashboard') ? 'bg-blue-300 text-black' : ''}}"  type="button" > --}}
                    {{ __('DASHBOARD')}}
                 {{-- </x-general-button>               --}}
            </x-responsive-nav-link>

        </div>





        <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('agentschedules.index')" :active="request()->routeIs('agentschedules')">
                <x-general-button  class="bg-blue-700 text-white {{request()->routeIs('agentschedules.index') ? 'bg-blue-300 text-black' : ''}}" type="button"  >
                    APPOINTMENT
                </x-general-button>
            </x-responsive-nav-link>
        </div>











    <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->firstname }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>


                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('agents.show', Auth::user()->id)">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>


                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
            </div>
         @endif
    @endauth
    </div>

</nav>

