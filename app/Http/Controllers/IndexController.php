<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index()
    {

        return view('pages.index');

    }

    public function show(Training $training)
    {
        return view('pages.subscription', [
        'training' => $training
        ]
    );
    }

    public function registration()
    {
        return view('pages.registration');
    }

    public function estate()
    {
        return view ('estate.index');
    }

    public function aboutus(){
        return view('pages.aboutus');
    }
}
