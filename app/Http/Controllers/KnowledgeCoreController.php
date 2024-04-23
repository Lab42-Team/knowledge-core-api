<?php

namespace App\Http\Controllers;

use App\Http\Requests\KnowledgeCore\StoreKnowledgeCoreRequest;
use App\Http\Requests\KnowledgeCore\UpdateKnowledgeCoreRequest;
use App\Models\KnowledgeCore;
use Illuminate\Http\JsonResponse;

class KnowledgeCoreController extends Controller
{
    /**
     * Create a new KnowledgeCoreController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->authorizeResource(KnowledgeCore::class, 'knowledge_core');
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $knowledgeCore = KnowledgeCore::first();
        return response()->json($knowledgeCore);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreKnowledgeCoreRequest $request
     * @return JsonResponse
     */
    public function store(StoreKnowledgeCoreRequest $request)
    {
        $validated = $request->validated();
        $knowledgeCore = KnowledgeCore::create($validated);
        return response()->json($knowledgeCore);
    }

    /**
     * Display the specified resource.
     *
     * @param KnowledgeCore $knowledgeCore
     * @return JsonResponse
     */
    public function show(KnowledgeCore $knowledgeCore)
    {
        return response()->json($knowledgeCore);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateKnowledgeCoreRequest $request
     * @param KnowledgeCore $knowledgeCore
     * @return JsonResponse
     */
    public function update(UpdateKnowledgeCoreRequest $request, KnowledgeCore $knowledgeCore)
    {
        $validated = $request->validated();
        $knowledgeCore->fill($validated);
        $knowledgeCore->save();
        return response()->json($knowledgeCore);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param KnowledgeCore $knowledgeCore
     * @return JsonResponse
     */
    public function destroy(KnowledgeCore $knowledgeCore)
    {
        $knowledgeCore->delete();
        return response()->json(['id' => $knowledgeCore->id], 200);
    }
}
