<x-app-layout>
<div class="p-4">
    <div class="grid place-content-center ">
        <x-statusmessage/>
        <div class="grid place-content-center font-Audiowide text-2xl bg-lime-50">
            Send email to registered trainees
        </div>
        <div class="bg-lime-300 p-4">

        <form action="/sendemail" method="post" enctype="multipart/form-data">
            @csrf
            @honeypot
 <div>
    <label for="coursestatus">Student Status</label>
 </div>
 <div>
    <select name="coursestatus" id="coursestatus">
        <option value="">Select</option>
        <option value="all">All</option>
        @foreach($studentstatus as $studentstatus)
        <option value="{{ $studentstatus->id }}">{{ $studentstatus->name }}</option>
        @endforeach


    </select>
    <x-formerror name="coursestatus"/>
 </div>

 <div>
    <label for="search">Search</label>
 </div>
 <div>
    <input type="search" name="search">
    <x-formerror name="search"/>
 </div>


 <div>
    <label for="title">Title</label>
 </div>
 <div>
    <input type="text" name="title" id="title">
    <x-formerror name="title"/>
 </div>


 <div>
    <label for="message">Message</label>
 </div>
 <div>
    <textarea name="message" id="message" cols="30" rows="10"></textarea>
    <x-formerror name="message"/>
 </div>

 <div>
    <x-primary-button>Submit</x-primary-button>
    <x-general-button type="reset">Reset</x-general-button>
    <a href="/"><x-secondary-button>Cancel</x-secondary-button></a>
 </div>
        </form>
    </div>
</div>
</div>
</x-app-layout>
