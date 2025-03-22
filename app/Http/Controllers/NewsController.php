<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\News\UpdateNewsRequest;
use Illuminate\Http\JsonResponse;

use Illuminate\Support\Facades\Log;

class NewsController extends Controller
{
    /**
     * Create a new NewsController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->authorizeResource(News::class, 'news');
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $news = News::all();
        return response()->json($news);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreNewsRequest $request
     * @return JsonResponse
     */
    public function store(StoreNewsRequest $request)
    {
        $news = News::create($request->validated());
        return response()->json($news);
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return JsonResponse
     */
    public function show(News $news)
    {
        return response()->json($news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateNewsRequest $request
     * @param News $news
     * @return JsonResponse
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $validated = $request->validated();
        $news->fill($validated);
        $news->save();
        return response()->json($news);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return JsonResponse
     */
    public function destroy(News $news)
    {
        $news->delete();
        return response()->json(['id' => $news->id], 200);
    }


    public function getStatuses()
    {
        $statuses = News::getStatusArray();
        return response()->json(['statuses' => $statuses]);

    }
}
