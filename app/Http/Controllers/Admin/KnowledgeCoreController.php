<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KnowledgeCoreRequest;
use App\Models\KnowledgeCore;

class KnowledgeCoreController extends Controller
{
    public function index() {
        $knowledge_cores = KnowledgeCore::all();
        return view('admin.knowledge-core.index', compact('knowledge_cores'));
    }


    public function create() {
        return view('admin.knowledge-core.create');
    }

    public function store(KnowledgeCoreRequest $request) {
        $data = $request->validated();
        KnowledgeCore::create($data);
        return redirect()->route('admin.knowledge-core.index');
    }

    public function show(KnowledgeCore $knowledge_core){
        return view('admin.knowledge-core.show', compact('knowledge_core'));
    }

    public function edit(KnowledgeCore $knowledge_core){
        return view('admin.knowledge-core.edit', compact('knowledge_core'));
    }

    public function update(KnowledgeCoreRequest $request, KnowledgeCore $knowledge_core) {
        $data = $request->validated();
        $knowledge_core->update($data);
        return redirect()->route('admin.knowledge-core.show', $knowledge_core->id);
    }

    public function destroy(KnowledgeCore $knowledge_core) {
        $knowledge_core->delete();
        return redirect()->route('admin.knowledge-core.index');
    }
}
