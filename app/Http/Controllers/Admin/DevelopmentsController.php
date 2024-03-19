<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Developments\StoreDevelopmentsRequest;
use App\Http\Requests\Admin\Developments\UpdateDevelopmentsRequest;
use App\Models\Developments;
use Carbon\Carbon;

class DevelopmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developments = Developments::all();
        return view('admin.developments.index', compact('developments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.developments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDevelopmentsRequest $request)
    {
        $data = $request->validated();
        $year = $data['year'];
        $data['year'] = $year."-01-01";
        $model = Developments::create($data);
        $message = __('developments.DEVELOPMENTS_MESSAGE.CREATED', ['id' => $model["id"]]);
        return redirect()->route('admin.developments.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(Developments $development)
    {
        return view('admin.developments.show', compact('development'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Developments $development)
    {
        return view('admin.developments.edit', compact('development'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDevelopmentsRequest $request, Developments $development)
    {
        $data = $request->validated();
        $year = $data['year'];
        $data['year'] = $year."-01-01";
        $development->update($data);
        $message = __('developments.DEVELOPMENTS_MESSAGE.CHANGED', ['id' => $development->id]);
        return redirect()->route('admin.developments.show', $development->id)->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Developments $development)
    {
        $development->delete();
        $message = __('developments.DEVELOPMENTS_MESSAGE.DELETED', ['id' => $development->id]);
        return redirect()->route('admin.developments.index')->with('error', $message);
    }
}
