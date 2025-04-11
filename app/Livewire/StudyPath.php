<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Lesson;
use App\Models\Path;
use App\Models\Technology;
use App\Models\Course;

class StudyPath extends Component
{

    public $paths;
    public $selectedPath;
    public $courses =[];
    public $selectedCourse;
    public $technologies = [];
    public $technology1;


    public function mount()
    {
        $this->paths = Path::with(['courses.technologies.lessons'])->get();


    }


    public function updatedSelectedPath($pathId)
    {

        $this->courses = Course::whereHas('paths', function ($query) use ($pathId) {
            $query->where('paths.id', $pathId);
        })->get();
    }

    public function updatedSelectedCourse($courseId)
    {
        $this->technologies = Course::find($courseId)?->technologies ?? [];
    }
    public function render()
    {
        return view('livewire.study-path');

    }
}
