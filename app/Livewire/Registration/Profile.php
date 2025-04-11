<?php

namespace App\Livewire\Registration;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    protected $listeners = ['logoutUser' => 'logout'];

    public function render()
    {
        return view('livewire.registration.profile');
    }

    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();

        return redirect('/login'); // Or wherever you want
    }

}
