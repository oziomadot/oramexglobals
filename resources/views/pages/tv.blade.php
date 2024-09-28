<x-app-layout>
    <div class="flex justify-between static">
        <div class="w-20 h-15 m-5  absolute -top-4 left-0 block"> <img src="{{ asset('storage/img/tvlogo.jpg')}}" alt="">
        </div>
        <div class="sm:text-4xl sm:pt-4 font-Audiowide font-black pl-28">
            ORAMEX GLOBALS TV
        </div>

        <x-navibar/>
        </div>
<div class="p-4 w-full bg-gradient-to-r from-black to-sky-500">

<div class="w-full sm:grid sm:grid-cols-3 sm:gap-4">
    <div class="relative col-span-2  p-4">

        <span class="absolute top-5 right-5 bg-slate-100 font-Sofia font-medium text-red-600 text-lg p-1 px-6 rounded-lg ">Live</span>

        <video  controls class="w-full rounded-lg " >
        <source src="{{ asset('storage/video/video.mp4')}}" type="video/mp4">
        </video >

    </div>
    <div class=" ">
        <div class=" m-2">
            <video  controls class="w-full rounded-lg " >
                <source src="{{ asset('storage/video/video.mp4')}}" type="video/mp4">
                </video >
        </div>
        <div class=" m-2 ">
            <video  controls class="w-full rounded-lg " >
                <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                </video >
        </div>
    </div>
</div>

    <div class="w-full">
        <div class="flex justify-center font-extrabold font-mono sm:sm:text-2xl text-white">
            Children
        </div>
        <div class=" flex justify-center sm:sm:gap-x-4 ">
            <div class="sm:sm:inline-block sm:m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg">
                    <source src="{{ asset('storage/video/video.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:sm:inline-block sm:m-2 bg-white p-1 rounded-lg">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg">
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4"/>
                    </video >
            </div>

            <div class="sm:sm:inline-block sm:m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:sm:inline-block sm:m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:sm:inline-block sm:m-2 bg-white p-1 rounded-lg ">
                <video  controls class=" w-full sm:w-full sm:w-56 sm:sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>


    </div>
    </div>





    <div class="w-full">
        <div class="flex justify-center font-extrabold font-mono sm:sm:text-2xl text-white">
            NEWS</div>


        <div class=" flex justify-center sm:gap-x-4 ">

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>
        </div>
    </div>

    <div>
    <div class=" flex justify-center font-extrabold font-mono sm:text-2xl text-white">
        Documentary
    </div>
    <div class="flex justify-center sm:gap-x-4">
        <div class="sm:inline-block m-2 bg-white p-1 rounded-lg  ">
            <video controls class="w-full sm:w-56 sm:h-40 rounded-lg">
                <source src="{{ asset('storage/video/video.mp4')}}" type="video/mp4">
            </video >
        </div>
        <div class="sm:inline-block m-2 bg-white p-1 rounded-lg">
            <video controls class=" rounded-lg w-full sm:w-56 sm:h-40 " >
                <source src="{{ asset('storage/video/video.mp4')}}" type="video/mp4">
            </video >
        </div>


            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
        </div>
        <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
            <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                </video >
        </div>


    </div>


    </div>

    <div class="w-full">
        <div class="flex justify-center font-extrabold font-mono sm:text-2xl text-white">
            Film
        </div>



<div class=" flex justify-center sm:gap-x-4 ">

    <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
        <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
            <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
            </video >
    </div>

    <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
        <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
            <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
            </video >
    </div>

    <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
        <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
            <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
            </video >
    </div>

    <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
        <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
            <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
            </video >
    </div>

    <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
        <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
            <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
            </video >
    </div>
</div>
    </div>

    <div class="w-full">
        <div class="flex justify-center font-extrabold font-mono sm:text-2xl text-white">
             Reality show
        </div>


        <div class=" flex justify-center sm:gap-x-4 ">

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>


            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>
        </div>
    </div>

    <div class="w-full">
        <div class="flex justify-center font-extrabold font-mono sm:text-2xl text-white">
             Sports
        </div>


        <div class=" flex justify-center sm:gap-x-4 ">

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>

            <div class="sm:inline-block m-2 bg-white p-1 rounded-lg ">
                <video  controls class="w-full sm:w-56 sm:h-40  rounded-lg" >
                    <source src="{{ asset('storage/video/video2.mp4')}}" type="video/mp4">
                    </video >
            </div>
        </div>

    </div>


</div>


</x-app-layout>
