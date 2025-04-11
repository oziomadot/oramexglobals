<nav class="-mx-3 flex flex-1 justify-end ">
    @auth
    <div>


     <div
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white
            mr-8 text-lg font-dmserif"
        >
            Welcome {{ Auth::user()->firstname }}

</div>
    </div>
    @else

    @if(Route::has('/'))
        <a
            href="{{ route('login') }}"
            class="bg-slate-50 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
        >
            Log in
        </a>
@endif
        {{-- @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="bg-slate-50 rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
                Register
            </a>
        @endif --}}
    @endauth
</nav>
