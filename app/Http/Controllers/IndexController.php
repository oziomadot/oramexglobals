<?php

namespace App\Http\Controllers;

use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index()
    {

        return view('pages.index');

    }
}
