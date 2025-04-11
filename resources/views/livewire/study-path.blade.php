

<div>
    <div>
        <!-- Select Path -->
        <label for="path" class="block mb-2 uppercase font-bold text-base text-lime-900 mt-4 ml-4">Select a Path:</label>
        <select wire:model.defer.live="selectedPath" id="path" class="border border-cyan-200 text-black w-80 rounded block ml-4">
            <option value="">-- Choose a Path --</option>
            @foreach($paths as $path)
                <option value="{{ $path->id }}">{{ $path->name }}</option>
            @endforeach
        </select>

        <!-- Select Course "-->
        <div>
        @if($selectedPath)
            <label for="course" class="block mb-2 uppercase font-bold text-base text-lime-900 mt-4 ml-4">Select a Course:</label>
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
            <select name="" id="technology" wire:model.live="selectedTechnology" class="border border-cyan-200 text-black w-80 rounded block ml-4">
                <option value="">Choose a Course</option>
                @foreach($technologies as $technology)
                    <option value="{{ $technology->id }}" >{{ $technology->name }}</option>
                @endforeach
            </select>
        @endif
    </div>
    </div>

</div>
