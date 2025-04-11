<x-app-layout>
<div class="bg-gray-100 p-2 sm:p-10">
    <div>
        {{-- navigation --}}
        {{-- @include('layouts.navigation') --}}
    </div>
  <div class="grid grid-cols-1 place-items-center mb-2 bg" >
    <p class=" font-bold text-xl sm:text-4xl sm:pt-4 text-black  font-Audiowide text-center">
        Welcome to Oramex Academy
    </p>

    <p class="sm:text-xl font-Sofia text-black bg-teal-50 p-2 ">
        Empowering Your Future with ICT Skills
    </p>
  </div>
  <div class=" grid grid-cols-1  sm:place-items-center">
  {{-- <div class="sm:w-2/12 inline-block">

  </div> --}}

  {{-- Center div --}}
  <div class=" mx-2 px-2 sm:w-9/12">
  <div>
    <p class="text-justify">
        At Oramex Academy, we are passionate about transforming lives through innovative and practical education. As the educational arm of Oramex Globals Limited, our mission is to equip individuals with cutting-edge ICT skills that empower them to excel in today’s digital world.
    </p>
  </div>


    {{-- what we offer --}}




  <div class="">
  <div class="bg-slate-700 px-2 sm:w-full grid place-content-center rounded-lg shadow-lg py-4 sm:m-3">

    <div class="">
        <div class="border-4 border-slate-600 border-b-slate-400 p-1 mb-2 bg-slate-700">
            <p  class="text-white drop-shadow-xl shadow-black font-Audiowide sm:text-lg">


        What We Offer </p>
    </div>
    <div class="bg-lime-50 px-4 font-black">
        <p class="line-clamp-3">
        Oramex Academy provides hands-on training in essential and in-demand ICT skills, tailored for learners of all levels—whether you're just starting your journey or enhancing your expertise. Our programs include:
        </p>
    </div>

    <div class="relative flex justify-around sm:w-10/12 mt-2">

        <div class=" size-20 rounded-full absolute top-10 sm:top-8 left-52 sm:left-56 bg-slate-700 ">
            {{-- round decoration --}}
        </div>

        <div class="w-full sm:flex flex-row justify-between p-2 sm:px-4">

            <div class=" h-36 grid content-center sm:inline-block mr-16">
                <div class="bg-slate-100  w-52 py-2 grid place-content-center rounded-l-lg text-center">
                    Website & Web Application Development
                </div>
            </div>

            <a href="{{ route('website.index') }}">
                <div class="h-36 p-4 rounded-r-lg bg-emerald-100 w-fit sm:inline-block">
                    <p class="line-clamp-3">
                    Learn how to build modern, responsive websites and powerful web applications using industry-standard technologies like HTML, CSS, JavaScript, Laravel, and more.
                    </p>
                    <x-spandiv>
                    Explore
                    </x-spandiv>
                </div>
            </a>
        </div>
    </div>


    <div class="relative flex justify-around w-10/12 mt-2">

        <div class="w-20 h-20 rounded-full absolute top-8 left-56  bg-slate-700">
{{-- round decoration --}}
    </div>

    <div class="w-full sm:flex flex-row justify-between px-4">

    <div class=" h-24 grid content-center inline-block mr-16">
    <div class="bg-slate-100  w-52 py-2 grid place-content-center rounded-l-lg mt-10">
        Android app development
    </div>
</div>

<a href="{{ route('android.index') }}">
    <div class="h-36 p-4 rounded-r-lg bg-emerald-100 w-fit inline-block">
        <p class="line-clamp-3">
        Master the art of mobile app development using Jetpack Compose and other tools to create innovative and user-friendly applications for the Android platform.
        </p>
        <x-spandiv>
            Explore
            </x-spandiv>

    </div></a>
</div>
    </div>



    <div class="relative flex justify-around w-10/12 mt-2">

        <div class="w-20 h-20 rounded-full absolute top-8 left-56  bg-slate-700">
            {{-- round decoration --}}
        </div>

        <div class="w-full sm:flex flex-row justify-between px-4">

            <div class=" h-24 grid content-center inline-block mr-16">
            <div class="bg-slate-100  w-52 py-2 grid place-content-center rounded-l-lg text-center mt-12">
                3D Animation & Creative Designn
            </div>
        </div>
<a href="{{ route('animation.index') }}">
            <div class="h-36 p-4 rounded-r-lg bg-emerald-100 w-fit inline-block mt-4">
                <p class="line-clamp-3">
                Unlock your creativity with immersive training in 3D modeling, animation, and digital artistry, enabling you to produce stunning visuals and animations for various industries.
                </p>
                <x-spandiv>
                    Explore
                    </x-spandiv>
            </div></a>
        </div>
    </div>



    <div class="relative flex justify-around w-10/12 mt-2">

        <div class="w-20 h-20 rounded-full absolute top-8 left-56  bg-slate-700">
{{-- round decoration --}}
    </div>

    <div class="w-full sm:flex flex-row justify-between px-4">

    <div class=" h-36 grid content-center inline-block mr-16">
    <div class="bg-slate-100  w-52 py-2 grid place-content-center rounded-l-lg">
        Video & Photo Editing:
    </div>
</div>
<a href="{{ route('vpediting.index') }}">
    <div class="h-36 p-4 rounded-r-lg bg-emerald-100 w-fit inline-block line-clamp-3">
        <p class="line-clamp-3">
        Develop professional video editing and photo enhancement skills using advanced tools like Adobe Premiere Pro, After Effects, Photoshop, and DaVinci Resolve. Learn how to create high-quality content for marketing, branding, and storytelling.
</p>
        <x-spandiv>
            Explore
            </x-spandiv>
    </div></a>
</div>
    </div>



    <div class="relative flex justify-around w-10/12 mt-2">

        <div class="w-20 h-20 rounded-full absolute top-2 left-56  bg-slate-700">
{{-- round decoration --}}
    </div>

    <div class="w-full sm:flex flex-row justify-between px-4">

    <div class=" h-24 grid content-center inline-block mr-16">
    <div class="bg-slate-100  w-52 py-2 grid place-content-center rounded-l-lg">
        Other ICT Skills:
    </div>
</div>

{{-- <a href="{{ route('ictskills.index') }}"> --}}
    <div class="h-fit p-4 rounded-r-lg bg-emerald-100 w-fit inline-block">
        <p class="line-clamp-3">
        Explore additional skills such as data analytics, cloud computing, cybersecurity, and more, designed to meet the demands of the ever-evolving digital landscape.
        </p>


    </div>
{{-- </a> --}}{{-- <x-spandiv>
            Explore
            </x-spandiv> --}}
</div>
    </div>



  </div>

  </div>

</div>


{{-- why choose us --}}
<div class="bg-slate-200 p-4 rounded-xl ml-3">
    <div class=" border-4  border-b-slate-100  p-1 mb-2">
        <p  class="text-black drop-shadow-xl shadow-black font-Audiowide text-lg   w-fit"> Why Choose Oramex Academy?
            </p>
    </div>

    <div class="p-2 sm:p-4 ">
        <div>
        <P class="text-black font-sans font-bold text-base">
        1. Practical, Hands-On Learning:
        </p>
        <p class="ml-4 pl-2 text-justify">
   Our training is built around real-world projects and scenarios, ensuring you gain practical experience and job-ready skills.
        </P>
</div>
<div>


<p class="text-black font-sans font-bold text-base">
2. Expert Instructors:
</p>
<p class="ml-4 pl-2 text-justify">
   Learn from seasoned professionals and industry experts who bring a wealth of knowledge and experience to every class.
</p>
</div>

<div>
<p class="text-black font-sans font-bold text-base">

3. Modern-Day Techniques:
</p>
<p class="ml-4 pl-2 text-justify">


   We leverage the latest tools, technologies, and teaching methodologies to provide a learning experience that is both engaging and effective.
</p>
</div>

<div>
<p class="text-black font-sans font-bold text-base">

4. Entrepreneurship Skills Development:
</p>
<p class="ml-4 pl-2 text-justify">
   At Oramex Academy, our training is not just about equipping you with skills to start looking for a job. You are equipped with the skills to <span class="text-base font-bold bg-teal-100 p-1"> create jobs and employ others </span>. We highly value <span class="text-base font-bold bg-teal-100 p-1"> entrepreneurship skills development </span> and incorporate this into all our programs, ensuring you not only have technical expertise but also the mindset and tools to innovate, lead, and build your own business.
</p>
</div>

<div>
    <p class="text-black font-sans font-bold text-base">

5. Personalized Attention:
</p>
<p class="ml-4 pl-2 text-justify">
   Small class sizes and interactive sessions ensure that every student receives the support they need to succeed.
</p>
</div>

<div>

<p class="text-black font-sans font-bold text-base">

6. Flexible Learning Options:
</p>
<p class="ml-4 pl-2 text-justify">
     With both in-person and online training programs, you can learn at your own pace and convenience.
</p>

</div>

<div>

<p class="text-black font-sans font-bold text-base">

7. Career & Business Advancement:
</p>
<p class="ml-4 pl-2 text-justify">
       Whether you're pursuing a career in tech, launching your own business, or looking to upgrade your skills, our training programs are designed to help you achieve your goals.
</p>
</div>
    </div>
</div>

{{-- Join the Oramex Academy Community --}}

<div class="bg-orange-50 rounded-xl my-2">
    <div class="p-4">
        <div class=" border-2 border-b-white p-1 mb-2">
            <p  class="text-black drop-shadow-xl shadow-black font-Audiowide text-lg font-extrabold  w-fit"> Join the Oramex Academy Community</p>
        </div>
        <div>
            <p>
                When you enroll in Oramex Academy, you’re not just taking a course—you’re joining a vibrant community of learners, creators, and innovators. Our students go on to achieve great things in their careers and businesses, and we are committed to supporting you every step of the way.

            </p>
        </div>
    </div>
</div>

{{-- Take the First Step Toward a Brighter Future --}}

<div class="bg-teal-50 rounded-xl ">
    <div class="p-4">
        <div class=" border-2 border-b-white p-1 mb-2">
            <p  class="text-black drop-shadow-xl shadow-black font-Audiowide text-lg font-extrabold  w-fit"> Take the First Step Toward a Brighter Future</p>
        </div>
        <div>
            <p>
                Don’t just dream about a successful career in technology—make it a reality with Oramex Academy. Explore our courses, choose the program that’s right for you, and start building the skills that will set you apart in the ICT industry.
            </p>
        </div>
    </div>
</div>


{{-- Take the First Step Toward a Brighter Future --}}

<div class="bg-lime-50 rounded-xl my-2">
    <div class="p-4 ">
        <div>
            <p class="text-red-500 drop-shadow-xl shadow-black font-Audiowide text-lg font-extrabold  w-fit">
                Your future starts here. Enroll today and unlock the power of ICT with Oramex Academy!</p>
        </div>
        <div>
            <p>
               <a href="{{ route('registration') }}">
                <x-general-button type="button" class="bg-lime-200 my-2">Register</x-general-button>
               </a>
            </p>
        </div>
    </div>
</div>


  <div class="bg-cyan-100 p-2 shadow-lg rounded-lg">
    <div>
<p class="text-lg font-sans font-bold">
    Are you interested in any of these programs, follow us on
    </p>
    <div class="flex justify-between px-4 py-2">
<div>
    <a href="https://www.facebook.com/profile.php?id=61563342031570">
        <img src="{{ asset('storage/img/facebook.svg') }}" class="w-8" alt="">Facebook
</a>
</div>
<div>
   <a href=" https://www.instagram.com/oramexglobals/">
    <img src="{{ asset('storage/img/instagram.svg') }}" class="w-8" alt=""> Instagram
</a>
</div>
<div>
    <a href="https://x.com/oramexglobals">
    <img src="{{ asset('storage/img/twitter.svg') }}" class="w-8" alt="">
X</a>
</div>
<div>
    <a href="https://www.tiktok.com/@oramexglobals?is_from_webapp=1&sender_device=pc">
        <img src="{{ asset('storage/img/tiktok.svg') }}" class="w-8" alt="">
        Tiktok
    </a>
</div>

    </div>
    <p class="text-lg font-sans font-bold">
    to get updates on the next admission time

</p>
    </div>

  </div>

</div>


</div>
<div class="grid place-content-center">
<a href="/">
    <button class="rounded-lg bg-blue-300 p-2 w-20 text-lg font-black">Home</button>
</a>
</div>
</div>
</x-app-layout>
