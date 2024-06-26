<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\Project\StoreProjectRequest;
use App\Http\Requests\Project\UpdateProjectRequest;
use Illuminate\Http\JsonResponse;

class ProjectController extends Controller
{
    /**
     * Create a new ProjectController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->authorizeResource(Project::class, 'project');
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $project = Project::all();
        return response()->json($project);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProjectRequest $request
     * @return JsonResponse
     */
    public function store(StoreProjectRequest $request)
    {
        $validated = $request->validated();
        $project = Project::create($validated);
        // Если в users есть значения, то добавление связи пользователей с проектом (таблиа ProjectUser)
        if (isset($validated['users']))
            $project->users()->attach($validated['users']);
        return response()->json($project);
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     * @return JsonResponse
     */
    public function show(Project $project)
    {
        return response()->json($project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProjectRequest $request
     * @param Project $project
     * @return JsonResponse
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $validated = $request->validated();
        $project->fill($validated);
        $project->save();
        // Если в users есть значения, то добавление связи пользователей с проектом (таблиа ProjectUser)
        if (isset($validated['users']))
            $project->users()->sync($validated['users']);
        else
            // В противном случае, удаление связки из таблицы ProjectUser
            $project->users()->detach();
        return response()->json($project);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Project $project
     * @return JsonResponse
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return response()->json(['id' => $project->id], 200);
    }
}
