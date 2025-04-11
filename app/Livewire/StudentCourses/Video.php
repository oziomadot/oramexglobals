<?php

namespace App\Livewire\StudentCourses;

use Livewire\Component;

class Video extends Component
{
    public function render()
    {
        return view('livewire.student-courses.video')->layout('components.dashboard');
    }
}
