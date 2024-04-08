<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KnowledgeCore\StoreKnowledgeCoreRequest;
use App\Http\Requests\Admin\KnowledgeCore\UpdateKnowledgeCoreRequest;
use App\Models\KnowledgeCore;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class KnowledgeCoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $knowledge_cores = KnowledgeCore::all();
        if (count($knowledge_cores) == 0)
            return view('admin.knowledge-core.index', compact('knowledge_cores'));
        else
            return redirect()->route('admin.knowledge-core.show', $knowledge_cores[0]->id);
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
     *
     * @param StoreKnowledgeCoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreKnowledgeCoreRequest $request)
    {
        $model = KnowledgeCore::create($request->validated());
        $message = __('knowledge_core.KNOWLEDGE_CORE_MESSAGE.CREATED', ['id' => $model->id]);
        return redirect()->route('admin.knowledge-core.show', $model->id)->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param KnowledgeCore $knowledgeCore
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function show(KnowledgeCore $knowledgeCore)
    {
        return view('admin.knowledge-core.show', compact('knowledgeCore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param KnowledgeCore $knowledgeCore
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function edit(KnowledgeCore $knowledgeCore)
    {
        return view('admin.knowledge-core.edit', compact('knowledgeCore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateKnowledgeCoreRequest $request
     * @param KnowledgeCore $knowledgeCore
     * @return RedirectResponse
     */
    public function update(UpdateKnowledgeCoreRequest $request, KnowledgeCore $knowledgeCore)
    {
        $knowledgeCore->update($request->validated());
        $message = __('knowledge_core.KNOWLEDGE_CORE_MESSAGE.CHANGED', ['id' => $knowledgeCore->id]);
        return redirect()->route('admin.knowledge-core.show', $knowledgeCore->id)->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param KnowledgeCore $knowledgeCore
     * @return RedirectResponse
     */
    public function destroy(KnowledgeCore $knowledgeCore)
    {
        $knowledgeCore->delete();
        $message = __('knowledge_core.KNOWLEDGE_CORE_MESSAGE.DELETED', ['id' => $knowledgeCore->id]);
        return redirect()->route('admin.knowledge-core.index')->with('error', $message);
    }
}
