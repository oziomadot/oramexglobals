<x-app-layout>
    <section class="p-4 bg-slate-600 ">
        <div class="shadow-lg border-2 rounded-lg sm:p-32 bg-slate-200">
<div class="flex justify-center  ">

            <h4 class="font-sans font-bold text-base sm:text-2xl block text-center ">
    REGISTRATION FORM FOR WEBSITE AND ANDROID APP DEVELOPMENT
    </h4>
</div>
<div>
<p class="bg-cyan-200 p-2 sm:p-4 p-2 sm:mt-4 text-justify">
    If you are interested in participating in this 2day progamming training that will take place in December 2024 at Nsukka,
    you need to complete this registeration form. There is no obligation after the completion of this form.

</p>
</div>
<div class="flex justify-center">
 <p class="font-san text-2xl">
    Total number of registered participant = {{ $registerednumber }}

 </p>
</div>
 <div class="flex justify-center">
 <p class="font-san text-2xl">
    Maximum number of participant expected = 100

 </p>
</div>

 <div class=" w-full  sm:p-10 flex justify-center">

    <x-statusmessage/>

 <form action='/training' method="POST" enctype="multipart/form-data" class="bg-lime-100 sm:w-2/5 p-2 shadow-lg sm:px-8 rounded-lg sm:py-4">

    @csrf
    @honeypot


<div class="py-4 w-full flex justify-center">
        <p class="text-xl font-mono font-extrabold">
            REGISTRATION FORM
        </p>
    </div>


    <x-formlable name="Surname" />
    <x-forminput name="surname" type="text"/>

    <x-formlable name="First name" />
    <x-forminput name="firstname" type="text"/>

    <x-formlable name="Date of birth" />
    <x-forminput name="dob" type="date"/>


<div>

    <x-formlable name="Gender"/>
    <label for="male" class="ml-4"> Male</label>
    <input name= "gender" type="radio" value="1" class="inline-block mr-4 ml-4"/>

    <label for="female" class="ml-4"> Female </label>
    <input name= "gender" type="radio" value="0"  class="ml-4"/>
    <x-formerror name="gender"/>
</div>


    <x-formlable name="Phone number" />
    <x-forminput name="phonenumber" type="text" />

    <x-formlable name="Whatsapp number" />
    <x-forminput name="whatsapp" type="text"/>

    <x-formlable name="Email" />
    <x-forminput name="email"  type="email"/>

    <x-formlable name="Current status" />
    <x-formerror name="currentstatus"/>
    <select name="currentstatus" id="" class="ml-4 block rounded">
        <option value="0">Select your current status</option>
       @foreach($currentstatus as $currentstatus)
        <option value="{{ $currentstatus->id }}">{{ $currentstatus->name }}</option>
        @endforeach

    </select>


    <x-formlable name="I am interested in" />
    <x-formerror name="interest"/>
    <select name="interest" id="" class="ml-4 block rounded">
        <option value="">Select your interest</option>
        @foreach($interest as $interest)
        <option value="{{ $interest->id }}">{{ $interest->name }}</option>
        @endforeach


    </select>


<div class="p-4">
    <span class="text-sm text-blue-500 block">I would like to have certificate at the end of the training </span>
    <input name= "certificate" type="checkbox" value="1"  class="ml-4 "/>
    <label for="certificate"class="ml-4 mt-8">Certificate <span class="text-xs">(optional)</span> </label>

</div>

<div class="relative flex py-5 items-center">
    <div class="flex-grow border-t border-gray-400"></div>
    <span class="flex-shrink mx-4 text-gray-400">NOTA BENE</span>
    <div class="flex-grow border-t border-gray-400"></div>
</div>
<div class=" p-4">
    <p class="text-justify"> <span class="font-base text-bold text-red-600">NB:</span> Participation is based on reservation. If your are interested in participation, please register on time to
    reserve a seat.  </p>
</div>

<div class="relative flex py-5 items-center">
    <div class="flex-grow border-t border-gray-400"></div>
    <span class="flex-shrink mx-4 text-gray-400">&#127881; 	&#127881; </span>
    <div class="flex-grow border-t border-gray-400"></div>
</div>
<div class="px-4 flex justify-center">
    <p>
        &#128512; Happy participation, see you soon. &#128525;
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
</div>
</section>
</x-app-layout>
