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
        $medicine = Medicine::query();

        if($request->has("IncludeClassification")){
           $medicine->with("classification");
        }

        $perPage = $request->input('per_page' , 10);
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


