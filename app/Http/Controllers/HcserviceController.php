<?php

namespace App\Http\Controllers;

use App\Models\hcservice;
use Illuminate\Http\Request;

class HcserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hcservice.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hcservice.create');
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
    public function show(hcservice $hcservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hcservice $hcservice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hcservice $hcservice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hcservice $hcservice)
    {
        //
    }
}
