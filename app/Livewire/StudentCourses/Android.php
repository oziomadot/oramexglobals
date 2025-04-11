<?php

namespace App\Livewire\StudentCourses;

use Livewire\Component;

class Android extends Component
{
    public function render()
    {
        return view('livewire.student-courses.android')->layout('components.dashboard');
    }
}
