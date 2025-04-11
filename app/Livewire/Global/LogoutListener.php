<?php

namespace App\Livewire\Global;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutListener extends Component
{
    protected $listeners = ['logoutUser' => 'logout'];

    public function logout()
    {

        logger('LogoutUser event received');

        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect('/login');
    }

    public function render()
    {
        return view('livewire.global.logout-listener');
    }
}
