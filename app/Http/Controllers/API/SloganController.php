<?php

namespace App\Http\Controllers;

use App\Http\Requests\Slogan\StoreSloganRequest;
use App\Http\Requests\Slogan\UpdateSloganRequest;
use App\Models\slogan;

class SloganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreSloganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(slogan $slogan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(slogan $slogan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSloganRequest $request, slogan $slogan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(slogan $slogan)
    {
        //
    }
}
