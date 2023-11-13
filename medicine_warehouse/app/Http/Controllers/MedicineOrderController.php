<?php

namespace App\Http\Controllers;

use App\Models\MedicineOrder;
use App\Http\Requests\StoreMedicineOrderRequest;
use App\Http\Requests\UpdateMedicineOrderRequest;

class MedicineOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicine = Medicine::query();

        if($request->has("IncludeClassification")){
           $medicine->with("classification");
        }

        $perPage = $request->input('per_page' , 1);
        $medicines = $medicine->paginate($perPage);

         return new MedicineCollection($medicines);
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
    public function store(StoreMedicineOrderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MedicineOrder $medicineOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MedicineOrder $medicineOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicineOrderRequest $request, MedicineOrder $medicineOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MedicineOrder $medicineOrder)
    {
        //
    }
}
