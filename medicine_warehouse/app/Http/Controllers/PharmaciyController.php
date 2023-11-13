<?php

namespace App\Http\Controllers;

use App\Models\Pharmaciy;
use App\Http\Requests\StorePharmaciyRequest;
use App\Http\Requests\UpdatePharmaciyRequest;

class PharmaciyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePharmaciyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pharmaciy $pharmaciy,Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pharmaciy $pharmaciy,Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePharmaciyRequest $request, Pharmaciy $pharmaciy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pharmaciy $pharmaciy,Request $request)
    {
        //
    }
}
