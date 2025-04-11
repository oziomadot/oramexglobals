<x-app-layout>
<div class="p-4">
<div class="bg-lime-50 p-4 grid place-content-center">
    @if($training->subscription == 1)

<div class="grid place-content-center">
    <img src="{{ asset('storage/video/sad.webp') }}" alt="">
</div>
<div class=" grid place-content-center bg-cyan-100 rounded-lg shadow-lg  p-4">
    <p class="text-center text-lg">
        It is painful that you dont want to hear from us anymore. Even though, we have a lot in bag for you. If really mean it, click on the button below
    </p>

    <form action= {{ route('training.update', $training)}} method="post">

        @csrf
        @method('PUT')

    <input type="hidden" value="0" name="subscription">
    <button class="bg-red-200 rounded-lg p-2 font-sans font-bold" type="submit">
    <label for="subcription" class="text-black ">Do not contact me</label> </button>
    </form>
</div>

@else
<div>
    <div class="grid place-content-center">
    <p class="text-2xl p-2 bg-slate-100 ">
        You unsubscribed from getting updates from us.

    </p>
    <p class="text-2xl p-2 bg-slate-100 ">
        If this was a mistake,

    </p>

</div>
<div class="grid place-content-center">
   <img src="{{ asset('storage/video/point.gif') }}" alt="Go down ">
</div>

</div>

 <div>
    <p class="text-bold sm:text-2xl bg-slate-100 p-2">
        We can express how happy we are that you are here.
    </p>
 </div>

 <div>
    <div class="p-4  grid place-content-center">
        <img src="{{ asset('storage/video/happy.gif') }}" alt="We are happy that you are here">
    </div>
 </div>

 <p class="text-center text-lg">
    Please, click the button below to get all the updates from us about future trainings, programms and products.
    Thanks
</p>
<form action= {{ route('training.update', $training)}} method="post">

    @csrf
    @method('PUT')

<input type="hidden" value="1" name="subscription">
<button class="bg-red-200 rounded-lg p-2 font-sans font-bold" type="submit">
<label for="subcription" class="text-black ">Let me know about new programms</label> </button>
</form>

@endif

</div>
</div>
</x-app-layout>
