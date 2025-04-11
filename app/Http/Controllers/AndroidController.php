<?php

namespace App\Http\Controllers;

use App\Models\Android;
use Illuminate\Http\Request;

class AndroidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("android.index");
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
    public function show(Android $android)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Android $android)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Android $android)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Android $android)
    {
        //
    }
}
