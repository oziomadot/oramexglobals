<?php

namespace App\Livewire;

use App\Models\Training;
// use Livewire\Attributes\Validate;
use Livewire\Component;


class Trianeedetails extends Component
{
    // #[Validate('required')]
    public $details;
    public $trainee = [];


    public function search()
    {
        $details = $this->details;

        $this->trainee = Training::where('email', '=', $details)
            ->orWhere('trainingId', '=', $details)
            ->orWhere('phonenumber', '=', $details)
            ->get();



    }

    public function render()
    {

    return view('livewire.trianeedetails');
    }






}
