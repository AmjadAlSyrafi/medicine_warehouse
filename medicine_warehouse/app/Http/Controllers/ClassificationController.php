<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use App\Http\Requests\StoreClassificationRequest;
use App\Http\Requests\UpdateClassificationRequest;
use App\Http\Resources\ClassificationResource;
use App\Http\Resources\MedicineResource;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classifications = Classification::all();

        return response()->json([
            'data' => $classifications,
            'message' => 'Classifications retrieved successfully',
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
    public function store(StoreClassificationRequest $request)
    {
        return new ClassificationResource(Classification::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Classification $classification , Request $request)
    {
        if (!$classification) {
            return response()->json(['error' => 'Classification not found'], 404);
        }
        if ($request->has("includeClassification")) {

            return new MedicineResource($classification->loadMissing('medicine'));
        }

        return new MedicineResource($classification) ;
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classification $classification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClassificationRequest $request, Classification $classification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classification $classification)
    {
        //
    }
}
