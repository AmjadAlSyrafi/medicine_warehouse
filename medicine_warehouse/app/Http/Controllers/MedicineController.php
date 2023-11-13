<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Http\Resources\MedicineResource;
use App\Http\Resources\MedicineCollection;
use App\Http\Requests\StoreMedicineRequest;
use App\Http\Requests\UpdateMedicineRequest;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Medicine::query();

        // Example: Filter by classification_id
        if ($request->has('classification_id')) {
            $query->where('classification_id', $request->input('classification_id'));
        }

        // Example: Filter by company_name_id
        if ($request->has('company_name_id')) {
            $query->where('company_name_id', $request->input('company_name_id'));
        }

        $medicines = $query->get();

        return response()->json([
            'data' => $medicines,
            'message' => 'Medicines retrieved successfully',
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
    public function store(StoreMedicineRequest $request)
    {
        return new MedicineResource( Medicine::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        $medicine = Medicine::find($medicine);

        if (!$medicine) {
            return response()->json(['error' => 'Medicine not found'], 404);
        }

        return new MedicineResource( $medicine );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicineRequest $request, Medicine $medicine)
    {
        $medicine-> update($request->all());

        return response()->json(['medicine' => $medicine], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {
        if (!$medicine) {
            return response()->json(['error' => 'Medicine not found'], 404);
        }

        $medicine->delete();

        return response()->json(['message' => 'Medicine deleted successfully'], 200);
    }

}


