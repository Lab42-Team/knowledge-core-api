<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\StoreProjectRequest;
use App\Http\Requests\Admin\Project\UpdateProjectRequest;
use App\Models\Project;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        $types = Project::getTypeArray();
        $statuses = Project::getStatusArray();
        return view('admin.project.create', compact('types', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProjectRequest $request
     * @return RedirectResponse
     */
    public function store(StoreProjectRequest $request)
    {
        $model = Project::create($request->validated());
        $message = __('project.PROJECT_MESSAGE.CREATED', ['id' => $model->id]);
        return redirect()->route('admin.project.show', $model->id)->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function show(Project $project)
    {
        return view('admin.project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Project $project
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function edit(Project $project)
    {
        $types = Project::getTypeArray();
        $statuses = Project::getStatusArray();
        return view('admin.project.edit', compact('project', 'types', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProjectRequest $request
     * @param Project $project
     * @return RedirectResponse
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update($request->validated());
        $message = __('project.PROJECT_MESSAGE.CHANGED', ['id' => $project->id]);
        return redirect()->route('admin.project.show', $project->id)->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @return RedirectResponse
     */
    public function destroy(Project $project)
    {
        $project->delete();
        $message = __('project.PROJECT_MESSAGE.DELETED', ['id' => $project->id]);
        return redirect()->route('admin.project.index')->with('error', $message);
    }
}
