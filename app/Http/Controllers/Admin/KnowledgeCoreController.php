<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreKnowledgeCoreRequest;
use App\Http\Requests\Admin\UpdateKnowledgeCoreRequest;
use App\Models\KnowledgeCore;

class KnowledgeCoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $knowledge_cores = KnowledgeCore::all();
        return view('admin.knowledge-core.index', compact('knowledge_cores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.knowledge-core.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKnowledgeCoreRequest $request)
    {
        $data = $request->validated();
        $model = KnowledgeCore::create($data);
        $message = __('main.KNOWLEDGE_CORE_MESSAGE_CREATED', ['id' => $model["id"]]);
        return redirect()->route('admin.knowledge-core.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(KnowledgeCore $knowledgeCore)
    {
        return view('admin.knowledge-core.show', compact('knowledgeCore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KnowledgeCore $knowledgeCore)
    {
        return view('admin.knowledge-core.edit', compact('knowledgeCore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKnowledgeCoreRequest $request, KnowledgeCore $knowledgeCore)
    {
        $data = $request->validated();
        $id = $knowledgeCore->id;
        $knowledgeCore->update($data);
        $message = __('main.KNOWLEDGE_CORE_MESSAGE_CHANGED', ['id' => $id]);
        return redirect()->route('admin.knowledge-core.show', $knowledgeCore->id)->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KnowledgeCore $knowledgeCore)
    {
        $id = $knowledgeCore->id;
        $knowledgeCore->delete();
        $message = __('main.KNOWLEDGE_CORE_MESSAGE_DELETED', ['id' => $id]);
        return redirect()->route('admin.knowledge-core.index')->with('error', $message);
    }
}
