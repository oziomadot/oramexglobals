<?php

namespace App\Http\Controllers;

use App\Models\Vpediting;
use Illuminate\Http\Request;

class VpeditingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('vpediting.index');
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
    public function show(Vpediting $vpediting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vpediting $vpediting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vpediting $vpediting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vpediting $vpediting)
    {
        //
    }
}
