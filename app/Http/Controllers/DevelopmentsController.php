<?php

namespace App\Http\Controllers;

use App\Models\Developments;
use App\Http\Requests\Developments\StoreDevelopmentsRequest;
use App\Http\Requests\Developments\UpdateDevelopmentsRequest;
use Illuminate\Http\JsonResponse;

class DevelopmentsController extends Controller
{
    /**
     * Create a new DevelopmentsController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->authorizeResource(Developments::class, 'developments');
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $developments = Developments::all();
        return response()->json($developments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDevelopmentsRequest $request
     * @return JsonResponse
     */
    public function store(StoreDevelopmentsRequest $request)
    {
        $validated = $request->validated();
        $developments = Developments::create($validated);
        return response()->json($developments);
    }

    /**
     * Display the specified resource.
     *
     * @param Developments $developments
     * @return JsonResponse
     */
    public function show(Developments $developments)
    {
        return response()->json($developments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDevelopmentsRequest $request
     * @param Developments $developments
     * @return JsonResponse
     */
    public function update(UpdateDevelopmentsRequest $request, Developments $developments)
    {
        $validated = $request->validated();
        $developments->fill($validated);
        $developments->save();
        return response()->json($developments);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Developments $developments
     * @return JsonResponse
     */
    public function destroy(Developments $developments)
    {
        $developments->delete();
        return response()->json(['id' => $developments->id], 200);
    }
}
