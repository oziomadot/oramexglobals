

    <x-dashboard>

<div class="p-4">
    <div class="flex justify-center">
        <p class="uppercase text-2xl font-Audiowide bg-lime-400 p-2 m-2">
            Add a lesson
        </p>
    </div>
  <div class="grid grid-cols-1 place-items-center">


    <form wire:submit="addlesson">







    <div>
        <!-- Select Path -->
        <label for="path" class="block mb-2 uppercase font-bold text-base text-lime-900 mt-4 ml-4">Select a Path:</label>
        <x-formerror name="selectedPath" />
        <select wire:model.defer.live="selectedPath" id="path" class="border border-cyan-200 text-black w-80 rounded block ml-4">
            <option value="">-- Choose a Path --</option>
            @if($paths)
            @foreach($paths as $path)
                <option value="{{ $path->id }}">{{ $path->name }}</option>
            @endforeach
            @endif
        </select>

        <!-- Select Course "-->
        <div>
        @if($selectedPath)
            <label for="course" class="block mb-2 uppercase font-bold text-base text-lime-900 mt-4 ml-4">Select a Course:</label>
            <x-formerror name="selectedCourse" />
            <select wire:model.live="selectedCourse" id="course" class="border border-cyan-200 text-black w-80 rounded block ml-4">
                <option value="">-- Choose a Course --</option>

                @foreach($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->name }}</option>
                @endforeach
            </select>
        @endif
</div>
<div>


        <!-- Show Technologies -->
        @if($selectedCourse)
            <label for="technology" class="block mb-2 uppercase font-bold text-base text-lime-900 mt-4 ml-4">Select a Technology:</label>
            <x-formerror name="selectedTechnology" />
            <select name="" id="technology" wire:model.live="selectedTechnology" class="border border-cyan-200 text-black w-80 rounded block ml-4">
                <option value="">Choose a Course</option>
                @foreach($technologies as $technology)
                    <option value="{{ $technology->id }}" >{{ $technology->name }}</option>
                @endforeach
            </select>
        @endif
    </div>
    </div>














    {{-- <x-formlable name="lesson_title"  >
        LESSON TITLE
    </x-formlable >
    <x-forminput name="lesson_title" type="text"/>--}}

     <!-- Existing Titles Dropdown -->
     <div>
        <label for="title_id" class="block mb-2 uppercase font-bold text-base text-lime-900 mt-4 ml-4">
            Select Lesson Title</label>
            <x-formerror name="title_id" />
        <select id="title_id" wire:model="title_id"  class='border border-cyan-200 text-black w-80 rounded block ml-4'>
            <option value="">-- Select Existing Title --</option>
            @foreach($titles as $title)
                <option value="{{ $title->id }}">{{ $title->name }}</option>
            @endforeach
        </select>
    </div>

    <!-- OR Add a New Title -->
    <div>
        <label for="new_title" class="block mb-2 uppercase font-bold text-base text-lime-900 mt-4 ml-4">
            Or Add New Lesson Title</label>
            <x-formerror name="new_title" />
        <input type="text" id="new_title" wire:model="new_title"  class='border border-cyan-200 text-black w-80 rounded block ml-4'>
        @error('new_title') <span class="error">{{ $message }}</span> @enderror
    </div>




    <x-formlable name="description"/>

    <x-formerror name="description" />
    <textarea name="description" wire:model="description" id="" cols="30" rows="10" class="border border-cyan-200 text-black w-80 rounded block ml-4"></textarea>




    <x-formlable name="video link"/>

    <x-forminput  wire:model="video" name="video" type="text"/>





    <x-formlable name="attachment" />

    <x-forminput name="attachment" wire:model="attachment" type="file"/>


    <x-formlable name="extras"  />
    <textarea name="extras" wire:model="extras" id="" cols="30"
    rows="10" class="border border-cyan-200 text-black w-80 rounded block ml-4" value="old($extras)?:''"></textarea>



                        <x-formlable name="action"  >
                            ACTION
                        </x-formlable >
                        <div class="flex justify-between">

    <div class="rounded-2xl p-1 bg-cyan-500 w-20 flex justify-center inline-block">
<button type="submit"> Add </button>
    </div>

    <div class="rounded-2xl p-1 bg-red-300 w-20 flex justify-center inline-block">
      <input type="reset">
    </div>


</div>




<div wire:loading wire:target="addlesson" class="mt-2 text-blue-500">
    <svg class="animate-spin h-5 w-5 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
    </svg>
    Processing...
</div>




</form>

  </div>
  <div>

  </div>
</div>
</x-dashboard>

