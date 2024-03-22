<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Developments\StoreDevelopmentsRequest;
use App\Http\Requests\Admin\Developments\UpdateDevelopmentsRequest;
use App\Models\Developments;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class DevelopmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        $developments = Developments::all();
        return view('admin.developments.index', compact('developments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function create()
    {
        return view('admin.developments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreDevelopmentsRequest $request
     * @return RedirectResponse
     */
    public function store(StoreDevelopmentsRequest $request)
    {
        $data = $request->validated();
        if (!empty($data['year']))
            $data['year'] = $data['year'] . '-01-01';
        $model = Developments::create($data);
        $message = __('developments.DEVELOPMENTS_MESSAGE.CREATED', ['id' => $model->id]);
        return redirect()->route('admin.developments.show', $model->id)->with('success', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param Developments $development
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function show(Developments $development)
    {
        return view('admin.developments.show', compact('development'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Developments $development
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function edit(Developments $development)
    {
        return view('admin.developments.edit', compact('development'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateDevelopmentsRequest $request
     * @param Developments $development
     * @return RedirectResponse
     */
    public function update(UpdateDevelopmentsRequest $request, Developments $development)
    {
        $data = $request->validated();
        if (!empty($data['year']))
            $data['year'] = $data['year'] . '-01-01';
        $development->update($data);
        $message = __('developments.DEVELOPMENTS_MESSAGE.CHANGED', ['id' => $development->id]);
        return redirect()->route('admin.developments.show', $development->id)->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Developments $development
     * @return RedirectResponse
     */
    public function destroy(Developments $development)
    {
        $development->delete();
        $message = __('developments.DEVELOPMENTS_MESSAGE.DELETED', ['id' => $development->id]);
        return redirect()->route('admin.developments.index')->with('error', $message);
    }
}
