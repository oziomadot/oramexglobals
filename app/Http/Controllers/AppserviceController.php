<?php

namespace App\Http\Controllers;

use App\Models\Appservice;
use Illuminate\Http\Request;

class AppserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('appservice.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Appservice $appservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appservice $appservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appservice $appservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appservice $appservice)
    {
        //
    }
}
