<?php

namespace App\Livewire;

use App\Models\Training;
use Livewire\Component;

class NewRegister extends Component
{

    public $email;
    public $emailExist;


    public function render()
    {
        return <<<'HTML'
        <div>
        <input wire:model="email" type="email">
        <button wire:click="checkemail">Register</button>

        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        </div>
        HTML;
    }

    public function checkemail()
    {

        $this->emailExist = Training::where('email', $this->email)->get();



        if($this->emailExist){

            return <<<'HTML'
            <div>
        <input wire:model="password" type="password">
        <input wire:model="confirm password" type="password">
        <button wire:click="submit">Submit</button>

        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        </div>
        HTML;
        }else{
           dd($this->email);
        }
    }

    public function submit()
    {
// Student::create([

// ]);

    }

}
