<nav class="bg-slate-200 border-b shadow-md px-4 py-3 w-full">
    <div class="flex justify-between items-center">
        <div class="text-xl font-bold">
           <img src="{{ asset('/storage/img/ogname2.png') }}" alt="">
        </div>

        <!-- Mobile Hamburger -->
        <div x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false" class="">
            <button @click="open = !open" class="focus:outline-none">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>

            <!-- Dropdown Menu -->
            <div x-show="open" x-transition class="absolute top-20 right-0 w-fit bg-white shadow-md z-50">
                <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('HOME') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('aboutus')" :active="request()->routeIs('aboutus')">
                    {{ __('ABOUT US') }}
                </x-responsive-nav-link>

                <x-menudiv name="Academy" icon="fas fa-chalkboard-teacher" :items="[['label' => 'Login', 'url' => 'login']
                    ]"/>

                <x-menudiv name="House Keeping and caregiving" icon="fas fa-chalkboard-teacher" :items="[['label' => 'Login', 'url' => 'loginhc']
                    ]"/>

                <x-menudiv name="Application development" icon="fas fa-chalkboard-teacher" :items="[['label' => 'Request for service', 'url' => 'contactus']
                    ]"/>

                <x-menudiv name="Smart Real Estate" icon="fas fa-chalkboard-teacher" :items="[['label' => 'Buy/Rent house/land', 'url' => 'estate.index']
                    ]"/>
            </div>
        </div>


    </div>
</nav>
