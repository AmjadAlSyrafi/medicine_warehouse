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
    public function index(Request $request)
    {
        $query = MedicineOrder::query();

        // Example: Filter by pharmacist_id
        if ($request->has('pharmacist_id')) {
            $query->where('pharmacist_id', $request->input('pharmacist_id'));
        }

        // Example: Filter by status
        if ($request->has('status')) {
            $query->where('status', $request->input('status'));
        }

        // Example: Filter by payment_status
        if ($request->has('payment_status')) {
            $query->where('payment_status', $request->input('payment_status'));
        }

        $medicineOrders = $query->get();

        return response()->json([
            'data' => $medicineOrders,
            'message' => 'Medicine orders retrieved successfully',
        ]);
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
