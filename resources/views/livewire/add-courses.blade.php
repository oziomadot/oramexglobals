<x-dashboard>
<div>

        <div class="p-4">
            <table class=" table-auto">
                <thead>
                    <tr >
                        <th class="mr-4">
                            Course Path
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>

                </thead>
                <tbody>

                    <livewire:study-path />


                    <div>


                        <!-- Show Lessons -->
                        @if($selectedTechnology)
                            <label>Select a Lesson:</label>
                            <select name="" id="" >
                                <option value="">Choose a Lesson</option>
                                @foreach($lessons as $lesson)
                                    <option value="{{ $lesson->id }}" >{{ $lesson->name }}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>

                </tbody>
            </table>

        {{-- @if($courses)
            <table>
<thead>

</thead>
<tbody>
    @foreach($courses as $course)
    <tr>
        <td>
            {{ $course->name}}
        </td>
        <td>
            <x-primary-button >Add</x-primary-button>
        </td>
    </tr>
    @endforeach
</tbody>
            </table>
            @endif --}}
        </div>

</div>

</x-dashboard>
