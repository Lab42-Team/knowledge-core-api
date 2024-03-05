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
        KnowledgeCore::create($data);
        return redirect()->route('admin.knowledge-core.index')->with('success','Запись создана!');
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
        $knowledgeCore->update($data);
        return redirect()->route('admin.knowledge-core.show', $knowledgeCore->id)->with('success','Запись изменена!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KnowledgeCore $knowledgeCore)
    {
        $knowledgeCore->delete();
        return redirect()->route('admin.knowledge-core.index')->with('error','Запись удалена!');
    }
}
