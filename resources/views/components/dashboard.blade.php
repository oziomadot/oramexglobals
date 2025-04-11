

<div class="m-2 p-2">
    <x-app-layout>
        <x-slot name="header"  >
            <div class="flex justify-between">
            <div>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
</div>
<div>
            @livewire('global.logout-listener')
</div>
</div>
        </x-slot>
    <div class="flex justify-end mx-4">
        <div>
                <div class="inline-block">
                    {{-- @if($inboxmessage) --}}
                   <i class=" fas fa-bell"></i>
                   {{-- @else --}}
                    <i class="far fa-bell-slash" style="font-size:20px;"></i>
                    {{-- @endif --}}

                </div>
                <div class="inline-block my-2 ">

                    <div class="rounded-full size-8 overflow-hidden ">
                       <img src="{{asset(Auth::user()->profilepix?: 'storage/img/team-1-800x800.jpg ')}}" alt="">
                    </div>

                </div>

                <div class="inline-block">
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
            <div x-show="open" x-transition class="absolute top-44 right-0 w-fit bg-white shadow-md z-50">



                <x-menudiv name="Profile" icon="fas fa-id-badge"  :items="[['label' => 'View', 'url' => 'user.profile'],
                    ['label' => 'Edit', 'url' => 'user.profile']]">


                    </x-menudiv>

                    <x-menudiv name="Add a course" icon="fas fa-chalkboard-teacher" :items="[['label' => 'Website/ Web App', 'url' => 'website.student'],
                    ['label' => 'Android App', 'url' => 'android.student'], ['label' => '3D Animation & Creative Design', 'url' => 'animation.student'],
                    ['label' => 'Video & Photo Editing', 'url' => 'video.student'],]"/>

                    <x-menudiv name="Messages" icon="fas fa-envelope-open "  :items="[['label' =>'New message', 'url' => 'home'], ['label' =>'All messages', 'url' => 'home']]"/>

                    <x-menudiv name="Task" icon="fas fa-cogs"  :items="[['label' => 'New Task', 'url' =>'home'], ['label' => 'All Task', 'url' => 'home']]"/>

                    {{-- for instructors  --}}
                    @if(Auth::user()->role->name == 'instructor')
                    <x-menudiv name="Add lesson" icon="fas fa-book-open"  :items="[
                         ['label' => 'Add a lesson', 'url' => 'addLesson']]"/>

                    <x-menudiv name="List of courses" icon="fas fa-book-reader"  :items="[
                         ['label' => '', 'url' => 'home']]"/>

                    <x-menudiv name="List of lessons" icon="fas fa-file-alt"  :items="[
                         ['label' => '', 'url' => 'home']]"/>

                    <x-menudiv name="List of active learners" icon="fas fa-users"  :items="[
                         ['label' => '', 'url' =>'home']]"/>

                    <x-menudiv name="Supervisee Groups" icon="fas fa-street-view"  :items="[
                         ['label' => '', 'url' => 'home']]"/>
                         @endif

                         @if(Auth::user()->role->name == 'staff')

                    {{-- for staff --}}
                    <x-menudiv name="List of all students" icon="fas fa-sort-amount-down-alt"  :items="[
                     ['label' => '', 'url' =>'home']]"/>

                    <x-menudiv name="List of instructors" icon="fab fa-elementor"  :items="[
                         ['label' => '', 'url' => 'home']]"/>

                         @endif





        </div>
        </div>
                </div>
             </div>
            </div>
        <div class="sm:grid grid-cols-9 gap-2">
            <div class="hidden lg:block col-span-2 bg-amber-300 rounded-bl-3xl rounded-tl-lg ml-1 mb-2 overflow-hidden ">
                <div class=" p-4 flex-grow">
                <div class="font-Protest text-lg flex justify-center tracking-widest w-full p-2 border-t-2 border-t-amber-400
                border-b-4 border-b-amber-500 bg-amber-300 my-4">
                    Dashboard
                </div>

                <x-menudiv name="Profile" icon="fas fa-id-badge"  :items="[['label' => 'View', 'url' => 'user.profile'],
                ['label' => 'Edit', 'url' => 'user.profile'], ['label' => 'Logout', 'url' => 'user.profile'] ]"/>

                <x-menudiv name="Add a course" icon="fas fa-chalkboard-teacher" :items="[['label' => 'Website/ Web App', 'url' => 'website.student'],
                ['label' => 'Android App', 'url' => 'android.student'], ['label' => '3D Animation & Creative Design', 'url' => 'animation.student'],
                ['label' => 'Video & Photo Editing', 'url' => 'video.student'],]"/>

                <x-menudiv name="Messages" icon="fas fa-envelope-open "  :items="[['label' =>'New message', 'url' => 'home'], ['label' =>'All messages', 'url' => 'home']]"/>

                <x-menudiv name="Task" icon="fas fa-cogs"  :items="[['label' => 'New Task', 'url' =>'home'], ['label' => 'All Task', 'url' => 'home']]"/>

                {{-- for instructors  --}}
                @if(Auth::user()->role->name == 'instructor')
                <x-menudiv name="Add lesson" icon="fas fa-book-open"  :items="[
                     ['label' => 'Add a lesson', 'url' => 'addLesson']]"/>

                <x-menudiv name="List of courses" icon="fas fa-book-reader"  :items="[
                     ['label' => '', 'url' => 'home']]"/>

                <x-menudiv name="List of lessons" icon="fas fa-file-alt"  :items="[
                     ['label' => '', 'url' => 'home']]"/>

                <x-menudiv name="List of active learners" icon="fas fa-users"  :items="[
                     ['label' => '', 'url' =>'home']]"/>

                <x-menudiv name="Supervisee Groups" icon="fas fa-street-view"  :items="[
                     ['label' => '', 'url' => 'home']]"/>
                     @endif

                     @if(Auth::user()->role->name == 'staff')

                {{-- for staff --}}
                <x-menudiv name="List of all students" icon="fas fa-sort-amount-down-alt"  :items="[
                 ['label' => '', 'url' =>'home']]"/>

                <x-menudiv name="List of instructors" icon="fab fa-elementor"  :items="[
                     ['label' => '', 'url' => 'home']]"/>

                     @endif

                </div>

            </div>



        <div class=" sm:col-span-7 py-12 bg-blue-50 p-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        {{ __("You're logged in!") }}


                    </div>





                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>

</div>
