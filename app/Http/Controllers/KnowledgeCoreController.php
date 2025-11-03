<?php

namespace App\Http\Controllers;

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
     * Display a first record from database about knowledge core information.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $knowledgeCore = KnowledgeCore::first();
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
}
