<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\StoreProjectRequest;
use App\Http\Requests\Admin\Project\UpdateProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Project::getTypeArray();
        $statuses = Project::getStatusArray();
        return view('admin.project.create', compact('types', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $model = Project::create($request->validated());
        $message = __('project.PROJECT_MESSAGE.CREATED', ['id' => $model->id]);
        return redirect()->route('admin.project.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Project::getTypeArray();
        $statuses = Project::getStatusArray();
        return view('admin.project.edit', compact('project', 'types', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update($request->validated());
        $message = __('project.PROJECT_MESSAGE.CHANGED', ['id' => $project->id]);
        return redirect()->route('admin.project.show', $project->id)->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        $message = __('project.PROJECT_MESSAGE.DELETED', ['id' => $project->id]);
        return redirect()->route('admin.project.index')->with('error', $message);
    }
}
