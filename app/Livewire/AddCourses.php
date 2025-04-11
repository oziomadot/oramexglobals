<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Path;
use App\Models\Technology;
use Livewire\Component;

class AddCourses extends Component
{
    public $paths;
    public $courses =[];
    public $selectedT;
    // public $course1;
    // public $tech1;
    public $lessons = [];
    public $selectedTechnology;

    // public function mount()
    // {
    //     $this->paths = Path::with('courses')->get();
    // }




    public function updatedSelectedTechnology($courseId)
    {
        $this->lessons = Lesson::find($courseId)?->lessons ?? [];
    }

    public function render()
    {
        return view('livewire.add-courses')->layout('layouts.app');
    }



}
