<x-app-layout>
<div>
    <header>
    <div
    style="background-image: url('{{ asset('storage/img/bg2.jpg')}}'); "
     class="  bg-yellow-700   w-full h-screen bg-blend-color-burn ">

     {{-- Top bar --}}
        <div class="bg-black h-24  flex justify-between border-b-2 border-white">
            <x-nav/>


        </div>

        {{-- middle div --}}
        <div class="w-full grid grid-cols-1 place-items-center gap-4 py-20">

<div class=" sm:text-5xl font-Audiowide text-white w-2/3 font-black grid grid-cols-1 place-items-center border-b-2 border-white relative flex mb-5">
    <p class="absolute inline-flex text-center sm:w-1/2  p-2 animate-[ping_5s_ease-in-out_infinite] ">CITADEL OF UNLIMITED POSSIBILITIES</p>
    <p class="relative inline-flex text-center sm:w-1/2   ">CITADEL OF UNLIMITED POSSIBILITIES</p>
</div>

<div class="bg-slate-300 p-2">
   <p class="sm:text-2xl font-Protest"> Touch your dreams through us</p>

</div>
        </div>

        <div class="w-full flex justify-center relative ">
            <div class="bg-white w-1/3 grid grid-cols-1 place-items-center absolute sm:-bottom-44">
                <p class="font-mea sm:text-4xl p-2 font-blackn tracking-wide"> Explore our services</p>
                <i class="fa-solid fa-circle-down"></i>
            </div>
        </div>

    </div>
</header>
<body >
    <div class="bg-black">

{{-- Services  --}}
<div class=" bg-amber-200  sm:grid grid-cols-2 gap-4 sm:mx-20 rounded-lg p-2 sm:p-10 mt-4">

    {{-- Academy div --}}
    <div class="overflow-hidden rounded-xl shadow-xl shadow-black m-4 bg-cyan-700 ">
        <div class="inline-block shadow-xl shadow-black  w-full  h-68 relative relative overflow-hidden">
        <img src="{{ asset('/storage/img/sg.jpg') }}" alt="">

        {{-- cut design --}}
        <div class="h-32 w-96 bg-cyan-200 overflow-hidden absolute -bottom-24">
            <div class="h-32  bg-black  -rotate-6  ">

            </div>
         </div>
        </div>

<div class="w-full flex justify-center bg-amber-100">
    <p class=" text-xl font-bold font-Audiowide">
            ACADEMY
        </p>
</div>
<div class="shadow-xl shadow-cyan-500 border-2 border-black p-4  bg-cyan-300 m-2 rounded-xl">
    <a href="{{ route('academy.index') }}">
        <p class="line-clamp-3">
        At Oramex Academy, we are passionate about transforming lives through innovative and practical education. As the educational arm of Oramex Globals Limited, our mission is to equip individuals with cutting-edge ICT skills that empower them to excel in today’s digital world.
    </p>

<span class="text-red-700 bg-cyan-200 p-1 px-4 border-1 rounded-xl shadow-xl ">More</span>
</a>



</div>

    </div>

   {{-- App Development div --}}
   <div class="overflow-hidden rounded-xl shadow-xl shadow-black m-4 bg-cyan-700 ">
    <div class="inline-block shadow-xl shadow-black  w-full  h-68 relative relative overflow-hidden">
    <img src="{{ asset('/storage/img/mobile.jpeg') }}" alt="">

    {{-- cut design --}}
    <div class="h-32 w-96 bg-cyan-200 overflow-hidden absolute -bottom-24">
        <div class="h-32  bg-black  -rotate-6  ">

        </div>
     </div>
    </div>

<div class="w-full flex justify-center bg-amber-100">
<p class=" text-xl font-bold font-Audiowide">
        APPLICATION DEVELOPMENT
    </p>
</div>
<div class="shadow-xl shadow-cyan-500 border-2 border-black p-4  bg-cyan-300 m-2 rounded-xl">
<a href="{{ route('appservice.index') }}">
    <p class="line-clamp-3">
        At <b>Oramex Globals Limited</b>, we specialize in designing and developing <b>cutting-edge websites, web applications, and Android mobile applications</b> that cater to businesses, startups, and individuals. Our solutions are built using the latest technologies, ensuring <b>scalability, security, and top-notch performance</b> to meet the evolving digital needs of modern businesses.
</p>

<span class="text-red-700 bg-cyan-200 p-1 px-4 border-1 rounded-xl shadow-xl ">More</span>
</a>



</div>

</div>

{{-- House and land sales agent and management  div --}}
<div class="overflow-hidden rounded-xl shadow-xl shadow-black m-4 bg-cyan-700 ">
    <div class="inline-block shadow-xl shadow-black  w-full  h-68 relative relative overflow-hidden">
    <img src="{{ asset('/storage/img/house.webp') }}" alt="">

    {{-- cut design --}}
    <div class="h-32 w-96 bg-cyan-200 overflow-hidden absolute -bottom-24">
        <div class="h-32  bg-black  -rotate-6  ">

        </div>
     </div>
    </div>

<div class="w-full flex justify-center bg-amber-100">
<p class=" text-xl font-bold font-Audiowide text-center ">
    SMART REAL ESTATE LISTING & RENTAL PLATFORM

    </p>
</div>
<div class="shadow-xl shadow-cyan-500 border-2 border-black p-4  bg-cyan-300 m-2 rounded-xl">
<a href="{{ route('estate.index') }}">
    <p class="line-clamp-3">
        Finding the right <b>house or land</b> to buy or rent shouldn’t be stressful. At <b>Oramex Globals Limited</b>, we provide a <b>smart, secure, and user-friendly platform</b> where individuals, property owners, and real estate agents can easily <b>list, buy, and rent properties</b>. Our platform is designed to <b>simplify the real estate process</b>, connecting buyers, renters, and sellers effortlessly.

</p>

<span class="text-red-700 bg-cyan-200 p-1 px-4 border-1 rounded-xl shadow-xl ">More</span>
</a>



</div>

</div>

{{-- House keeping and care giving div --}}
<div class="overflow-hidden rounded-xl shadow-xl shadow-black m-4 bg-cyan-700 ">
    <div class="inline-block shadow-xl shadow-black  w-full  h-68 relative relative overflow-hidden">
    <img src="{{ asset('/storage/img/caregiving.jpg') }}" alt="">

    {{-- cut design --}}
    <div class="h-32 w-96 bg-cyan-200 overflow-hidden absolute -bottom-24">
        <div class="h-32  bg-black  -rotate-6  ">

        </div>
     </div>
    </div>

<div class="w-full flex justify-center bg-amber-100">
<p class=" text-xl font-bold font-Audiowide">
        HOUSEKEEPING AND CAREGIVING
    </p>
</div>
<div class="shadow-xl shadow-cyan-500 border-2 border-black p-4  bg-cyan-300 m-2 rounded-xl">
<a href="{{ route('hcservice.index') }}">
    <p class="line-clamp-3">
        At Oramex Globals Limited, we understand the importance of a clean home, well-prepared meals, and reliable caregiving for both adults and children. That’s why we provide a seamless platform where customers can request housekeeping and caregiving services, while professionals in these fields can register and get assigned to work opportunities.
</p>

<span class="text-red-700 bg-cyan-200 p-1 px-4 border-1 rounded-xl shadow-xl ">More</span>
</a>



</div>

</div>

</div>


<footer>
    <div class="mt-8 grid grid-cols-6">
<div class="col-span-2">
    {{-- div on top of div --}}
<div class="w-96 h-64  bg-cyan-300 transform-flat size-20 overflow-hidden relative ">




    <div class="w-96 h-64 bg-black origin-top-left rotate-45 absolute -top-32 ">

    </div>


</div>
</div>
<div class=" col-span-4">

</div>

    </div>


</footer>

</div>
</body>
</div>

</x-app-layout>
